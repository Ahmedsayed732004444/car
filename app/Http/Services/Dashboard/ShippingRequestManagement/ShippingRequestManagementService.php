<?php

namespace App\Http\Services\Dashboard\ShippingRequestManagement;

use App\Enums\StatusShippingRequestEnum;
use App\Http\Repositories\Dashboard\ShippingRequestManagement\ShippingRequestManagementRepository;
use App\Http\Services\BaseService;
use App\Models\ShippingRequest;
use App\Utils\ConfigUtils;
use App\Utils\OTOServiceUtils;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ShippingRequestManagementService extends BaseService
{
    public function __construct(protected ShippingRequestManagementRepository $repo, protected OTOServiceUtils $otoServiceUtils) {}

    public function index(Request $request)
    {
        $searchValue = $request->input('search.value');

        $recordsCount =  $this->repo->getTotalRecordsCount(ShippingRequest::class);
        $recordsCountwithFilter = $this->repo->recordsCountShippingRequestWithFilter($searchValue);
        $records = $this->repo->index($request, $searchValue);

        return $this->repo->formatResponseDataTables(
            draw: $request->input('draw'),
            recordsCount: $recordsCount,
            recordsCountwithFilter: $recordsCountwithFilter,
            records: $records
        );
    }
    public function show($id)
    {
        $this->validate(['id' => $id], [
            'id' => 'required|integer|exists:shipping_requests,id',
        ]);

        $shippingRequest = $this->repo->show($id);
        $accessToken = $this->otoServiceUtils->getAccessTokenOTO();
        $cheapestCompany = null;
        if ($shippingRequest->is_user_confirmed && $shippingRequest->status == StatusShippingRequestEnum::Pending) {
            $cheapestCompany = $this->otoServiceUtils->checkDeliveryFeeAndGetCheapest(
                accessToken: $accessToken,
                originCity: $shippingRequest->city_origin_vendor,
                destinationCity: $shippingRequest->city_origin_dimensions,
                width: $shippingRequest->width,
                length: $shippingRequest->length,
                height: $shippingRequest->height,
                weight: $shippingRequest->weight
            );
        }
        Log::info($cheapestCompany);

        return [
            'shippingRequest' => $shippingRequest,
            'cheapestCompany' => $cheapestCompany,
        ];
    }

    public function createOrderShippingRequest(Request $request)
    {
        $this->validate($request->all(), [
            'shippingRequestId' => 'required|integer|exists:shipping_requests,id',
            'deliveryOptionId' => 'required',
        ]);

        $shippingRequest = $this->repo->getShippingRequestDetailById($request->input('shippingRequestId'));
        Log::info('Shipping Request Details: ', ['customer_name' => $shippingRequest->customer_name, 'company_sender_name' => $shippingRequest->company_sender_name]);
        $accessToken = $this->otoServiceUtils->getAccessTokenOTO();
        $body = [
            "orderId" =>  '766576',
            "createShipment" => true, // إنشاء الشحنة مباشرة
            "payment_method" => "cod", // الدفع عند الاستلام
            "amount" => ConfigUtils::getAmountRateAppForCharge(),
            "amount_due" => 0,
            "deliveryOptionId" => $request->input('deliveryOptionId'),
            // "brandId" => 1233,
            // "customsValue" => "12",
            // "customsCurrency" => "SAR",
            // "shippingAmount" => 20,
            // "subtotal" => 200,
            "currency" => "SAR",
            // "shippingNotes" => "be careful. it is fragile",
            // "packageSize" => "small",
            // "packageCount" => 2,
            // "packageWeight" => 1,
            // "boxWidth" => 10,
            // "boxLength" => 10,
            // "boxHeight" => 10,
            // "orderDate" => now()->format('d/m/Y H:i'),
            // "deliverySlotDate" => now()->addDay()->format('d/m/Y'),
            // "deliverySlotTo" => "12pm",
            // "deliverySlotFrom" => "2:30pm",
            "senderName" => $shippingRequest->company_sender_name ?? '',
            "senderInformation" => [
                "senderFullName" => $shippingRequest->company_sender_name ?? '',
                "senderMobile" => $shippingRequest->phone_origin_vendor ?? '',
                // "senderEmail" => "test@example.com",
                "senderCountry" => "SA",
                "senderCity" => $shippingRequest->city_origin_vendor ?? '',
                "senderAddressLine" => $shippingRequest->address_origin_vendor ?? ''
            ],
            "customer" => [
                "name" => $shippingRequest->company_sender_name ?? '',
                // "email" => "test@test.com",
                "mobile" => $shippingRequest->phone_origin_dimensions ?? '',
                "address" => $shippingRequest->address_origin_dimensions ?? '',
                // "district" => "Al Mughaisilah Dist.",
                "city" => $shippingRequest->city_origin_dimensions ?? '',
                "country" => "SA",
                // "postcode" => "42315"
            ],
            "items" => [
                [
                    // "productId" => 112,
                    "name" => "box 1",
                    "price" => ConfigUtils::getAmountRateAppForCharge(),
                    // "rowTotal" => 5,
                    // "taxAmount" => 0,
                    "quantity" => 1,
                    // "sku" => "test-product",
                    // "currency" => "SAR"
                ],
            ]
        ];
        // $shippingRequest->update([
        //     'status' => StatusShippingRequestEnum::InProgress,
        // ]);
        $createOrderResponse = $this->otoServiceUtils->createOrder($body, $accessToken);
        // array(
        //     'success' => true,
        //     'otoId' => 25014681,
        // );
        Log::info($createOrderResponse);
        if ($createOrderResponse['success']) {
            $shippingRequest->update([
                'status' => StatusShippingRequestEnum::InProgress,
                'oto_id' => $createOrderResponse['otoId'],
            ]);
        }
    }
}
