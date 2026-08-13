<?php

namespace App\Http\Controllers\API\V1\Shared\Complaints;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shared\Complaints\CreateComplaintVendorServiceRequest;
use App\Http\Services\Shared\ComplaintService;
use App\Traits\NotificationsTrait;

class ComplaintController extends Controller
{
    use NotificationsTrait;

    public function __construct(protected ComplaintService $complaintService) {}

    public function complaintVendorService(CreateComplaintVendorServiceRequest $request)
    {
        $created = $this->complaintService->complaintVendorService($request);

        if (!$created)
            return buildApiResponseHelper(false, 'لم يتم تسجيل البلاغ ... الرجاء المحاولة مرة اخرى');

        $this->notifyToAdmin(title: 'بلاغ جديد', body: 'بلاغ عن الطلب (' . $request->requestId . ') ' . ' - الرد رقم (' . $request->responseId . ')');

        return buildApiResponseHelper(true, 'تم تسجيل البلاغ بنجاح ... سيتم الرد عليك من قبل الإدارة لاحقاً');
    }
}
