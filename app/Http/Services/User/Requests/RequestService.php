<?php

namespace App\Http\Services\User\Requests;

use App\Enums\CustomFieldTypeEnum;
use App\Http\Repositories\Shared\CustomFieldRepository;
use App\Http\Repositories\User\Requests\RequestRepository;
use App\Models\RequestCustomer;
use App\Models\RequestImage;
use App\Utils\UploadUtils;
use Illuminate\Foundation\Console\UpCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestService
{
    public function __construct(protected RequestRepository $requestRepo, protected CustomFieldRepository $customFieldRepository) {}

    public function countFilterEligibleVendors(Request $request): int
    {
        return $this->requestRepo->countFilterEligibleVendors($request);
    }

    public function confirmRequest(Request $request)
    {
        $categoryId = $request->categoryId;
        $citiesIdsScope = $request->citiesIdsScope;
        $brandId = $request->input('brandId');

        $eligibleVendors = $this->requestRepo->getFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId);

        $createRequest = $this->createRequest($request);
        if ($brandId)
            $this->requestRepo->createRequestBrandScope($createRequest->id, $brandId);

        $this->createCustomFields($request, $createRequest->id);
        $this->uploadRequestImage($request->images ?? [],  $createRequest->id);
        $this->createRequestEligibleVendors($createRequest->id, $eligibleVendors);

        return $eligibleVendors;
    }

    private function createRequest(Request $request)
    {
        return $this->requestRepo->createRequest([
            'user_id' => getCurrUserIdHelper(),
            'category_id' => $request->categoryId,
            'customer_city_id' => $request->customerCityId,
            'description' => $request->description,
            'part_name' => $request->partName,
            'car_name' => $request->carName,
            'cities_ids_scope' => $request->citiesIdsScope,
        ]);
    }

    private function createCustomFields(Request $request, int $requestCustomerId)
    {
        $fieldsRequest = json_decode($request->customFields, true);

        if (is_array($fieldsRequest)) {

            $customFieldsList = (new CustomFieldRepository())->getCustomFieldsByCategoryId($request->categoryId);

            foreach ($customFieldsList as $item) {
                $customField = $fieldsRequest[$item->field_name] ?? '';
                if ($item->field_type != CustomFieldTypeEnum::File->value && !empty($customField)) {
                    $this->requestRepo->createRequestCustomFieldValues([
                        'request_id' => $requestCustomerId,
                        'custom_field_id' => $item->id,
                        'value' => json_encode($customField),
                    ]);
                }
            }
        }
    }

    private function uploadRequestImage($files, $requestId)
    {
        if (is_null($files))
            return;

        foreach ($files as $file) {
            $fileName = UploadUtils::encryptAndStoreSensitiveFile($file);
            RequestImage::create(['request_id' => $requestId, 'image_name' => $fileName]);
        }
    }

    // request_eligible_vendors
    private function createRequestEligibleVendors($requestId, $eligibleVendorsList)
    {
        foreach ($eligibleVendorsList as $vendor) {
            $this->requestRepo->createRequestEligibleVendors([
                'request_id' => $requestId,
                'vendor_id' => $vendor->id,
            ]);
        }
    }

    // ConfirmShippingRequest
    public function confirmShippingRequest(Request $request)
    {
        return $this->requestRepo->storeShippingRequest([
            'request_id' => $request->requestId,
            'response_id' => $request->responseId,
            'id_number_user' => $request->idNumberUser,
            'address' => $request->address,
        ]);
    }
}
