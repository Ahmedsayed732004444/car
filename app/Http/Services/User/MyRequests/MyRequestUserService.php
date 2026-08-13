<?php

namespace App\Http\Services\User\MyRequests;

use App\Http\Repositories\User\MyRequests\MyRequestUserRepository;
use App\Http\Services\BaseService;
use Illuminate\Http\Request;

class MyRequestUserService extends BaseService
{
    public function __construct(protected MyRequestUserRepository $myRequestUserRepository) {}

    public function getMyRequest()
    {
        return $this->myRequestUserRepository->getMyRequest();
    }

    public function getMyRequestById(Request $request, $requestId)
    {
        $this->validate(['requestId' => $requestId], ['requestId' => 'required|integer|exists:request_customers,id'], [
            'requestId.required' => 'معرف الطلب مطلوب',
            'requestId.integer' => 'رقم الطلب يجب أن يكون رقم صحيح',
            'requestId.exists' => 'رقم الطلب غير موجود',
        ]);

        $result = $this->myRequestUserRepository->getMyRequestById($requestId);

        if (!$result)
            return buildApiResponseHelper(false, 'الطلب غير موجود');

        $result['brandsNames'] = $this->myRequestUserRepository->getRequestBrandNamesScope($request->requestId);
        $result['cities'] = $this->myRequestUserRepository->getRequestCitiesNamesScope($result->cities);
        $result['requestImages'] = $this->myRequestUserRepository->getRequestImages($request->requestId);
        $result['customFields'] = $this->myRequestUserRepository->getRequestCustomFields($request->requestId);

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', $result);
    }

    public function getResponsesMyRequest(Request $request, $requestId)
    {
        $this->validate(['requestId' => $requestId], ['requestId' => 'required|integer'], [
            'requestId.required' => 'معرف الطلب مطلوب',
            'requestId.integer' => 'رقم الطلب يجب أن يكون رقم صحيح',
        ]);

        return $this->myRequestUserRepository->getResponsesMyRequest($requestId);
    }

    public function getResponseRequestById(Request $request, $responseId)
    {
        $this->validate(['responseId' => $responseId], ['responseId' => 'required|integer'], [
            'responseId.required' => 'معرف الرد مطلوب',
            'responseId.integer' => 'رقم الرد يجب أن يكون رقم صحيح',

        ]);

        return $this->myRequestUserRepository->getResponseRequestById($responseId);
    }
}
