<?php

namespace App\Http\Controllers\API\V1\User\Requests;

use App\Exceptions\CustomResponseException;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Request\{CheckEligibleVendorsRequest, ConfirmOrderRequest, ConfirmPriceShippingRequest, ConfirmShippingRequest};
use App\Http\Services\User\Requests\RequestService;
use App\Models\ShippingRequest;
use App\Models\Vendor;
use App\Traits\NotificationsTrait;
use App\Utils\ConfigUtils;
use App\Utils\OTOServiceUtils;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    use NotificationsTrait;

    public function __construct(protected RequestService $requestService, protected OTOServiceUtils $otoServiceUtils) {}

    public function checkEligibleVendors(CheckEligibleVendorsRequest $request)
    {
        $count = $this->requestService->countFilterEligibleVendors($request);

        return ($count == 0)
            ? buildApiResponseHelper(false, 'لم يتم العثور على شركات مؤهلة تلبي شروط ')
            : buildApiResponseHelper(true, 'تم العثور على ( ' . $count . ' ) شركة مؤهلة تلبي شروط طلبك');
    }

    public function confirmRequest(ConfirmOrderRequest $request)
    {
        DB::beginTransaction();
        try {
            $eligibleVendors = $this->requestService->confirmRequest($request);

            DB::commit();
            $this->notifyRequestToEligibleVendors($eligibleVendors);

            return buildApiResponseHelper(true, 'تم إرسال الطلب بنجاح ... سيتم الرد عليك من خلال الشركات المؤهلة لاحقاً');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            throw new CustomResponseException("حدث خطاء أثنا تأكيد الطلب ... الرجاء المحاولة مرة أخرى");
        }
    }

    public function ConfirmShippingRequest(ConfirmShippingRequest $request)
    {
        try {
            $shippingRequest = ShippingRequest::where('request_id', $request->requestId)->where('response_id', $request->responseId)->latest()->first();

            if (!$shippingRequest) {
                return buildApiResponseHelper(false, 'لا يوجد شحنة');
            }

            $dataBody = [
                'originCity' => $shippingRequest->city_origin_vendor ?? '',
                'destinationCity' => $request->cityOriginDimensions,
                'width' => $shippingRequest->width,
                'length' => $shippingRequest->length,
                'height' => $shippingRequest->height,
                'weight' => $shippingRequest->weight,
                'isCod' => true
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->otoServiceUtils->getAccessTokenOTO(),
                'Accept' => 'application/json',
            ])
                ->post(config('services.oto.url') . '/checkOTODeliveryFee', $dataBody);


            if ($response->ok()) {
                $result = $response->json();
                if ($result['success'] == false) {
                    return buildApiResponseHelper(false, 'لا يوجد شحنة');
                }

                $companies = $result['deliveryCompany'];
                $cheapest = collect($companies)->sortBy('price')->first();
                $cheapestPrice = $cheapest['price'] ?? 0;
                $shippingRequest->update([
                    'id_number_user' => $request->idNumberUser,
                    'city_origin_dimensions' => $request->cityOriginDimensions,
                    'address_origin_dimensions' => $request->addressOriginDimensions,
                    'phone_origin_dimensions' => $request->phoneOriginDimensions,
                    'fee_cheapest_shipping' => $cheapestPrice,
                    'amount_rate_app' => ConfigUtils::getAmountRateAppForCharge(),
                ]);

                return buildApiResponseHelper(true, 'السعر التقريبي للشحنة' . ' ' . ($cheapestPrice + ConfigUtils::getAmountRateAppForCharge()) . ' ريال' . ' - إضغط موافق لتاكيد الشحنة',  ['shippingRequestId' => $shippingRequest->id]);
            }
            return buildApiResponseHelper(false, 'لا يوجد شحنة');
        } catch (Exception $e) {
            report($e);
            throw new CustomResponseException("حدث خطاء في تاكيد الشحنة ... الرجاء المحاولة مرة اخرى");
        }
    }

    public function confirmPriceShippingRequest(ConfirmPriceShippingRequest $request)
    {
        $updated = ShippingRequest::where('id', $request->id)->update([
            'is_user_confirmed' => true
        ]);

        if (!$updated)
            return buildApiResponseHelper(false, 'حدث خطاء في تاكيد الشحنة ... الرجاء المحاولة مرة اخرى');

        $this->notifyToAdmin('طلب شحنة جديد', 'هناك طلب شحنة جديد ... طلب شحنة جديد');

        return buildApiResponseHelper(true, 'تم تاكيد الشحنة بنجاح');
    }
}
