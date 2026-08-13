<?php

namespace App\Http\Services\Vendor;

use App\Http\Repositories\Vendor\NewRequestRepository;
use App\Http\Repositories\Vendor\ResponseRequestRepository;
use App\Http\Services\BaseService;
use App\Utils\UploadUtils;
use Illuminate\Http\Request;

class ResponseRequestService extends BaseService
{

    public function __construct(protected ResponseRequestRepository $responseRequestRepo, protected NewRequestRepository $newRequestRepo) {}

    public function getMyResponseRequests()
    {
        return $this->responseRequestRepo->getMyResponseRequests();
    }

    public function sendResponseRequest(Request $request)
    {
        $vendorId = getCurrVendorIdHelper();
        $createResponseRequest = $this->responseRequestRepo->sendResponseRequest([
            'request_id' => $request->requestId,
            'vendor_id' => $vendorId,
            'price' => $request->price,
            'note' => $request->notes,
            'warranty' => $request->warranty,
            'status' => $request->responseRequestAvailability,
        ]);


        $imagesNames = UploadUtils::uploadMultipleImage($request->images);

        foreach ($imagesNames as $imageName) {
            $this->responseRequestRepo->createResponseRequestImage([
                'response_id' => $createResponseRequest->id,
                'image_name' => $imageName,
            ]);
        }

        return $createResponseRequest;
    }

    public function detailsResponseRequests(Request $request, $responseId)
    {
        $request->merge([
            'responseId' => $responseId,
        ]);
        $this->validate($request->all(), [
            'responseId' => 'required|integer',
        ]);

        $result = $this->responseRequestRepo->detailsResponseRequests($request->responseId);

        if (!$result)
            return buildApiResponseHelper(false, 'الرد غير موجود');

        $result['brandsNames'] = $this->newRequestRepo->getRequestBrandNamesScope($result->request_id);
        $result['cities'] = $this->newRequestRepo->getRequestCitiesNamesScope($result->cities);
        $result['customFields'] = $this->newRequestRepo->getRequestCustomFields($result->request_id);
        $result['requestImages'] = $this->newRequestRepo->getRequestImages($result->request_id);

        return buildApiResponseHelper(true, 'تم جلب البيانات بنجاح', $result);
    }
}
