<?php

namespace App\Http\Services\Shared;

use App\Enums\ComplaintSubjectEnum;
use App\Enums\ComplaintUserTypeEnum;
use App\Http\Repositories\Shared\ComplaintRepository;
use Illuminate\Http\Request;

class ComplaintService
{
    public function __construct(protected ComplaintRepository $complaintRepository) {}

    public function complaintVendorService(Request $request)
    {
        // إبلاغ عن إساءة
        return $this->complaintRepository->create([
            'user_type' => ComplaintUserTypeEnum::User->value,
            'user_id' => getCurrUserIdHelper(),
            'subject' => ComplaintSubjectEnum::VendorService->value,
            'request_id' => $request->requestId,
            'title' => 'بلاغ عن الطلب (' . $request->requestId . ') ' . ' - الرد رقم (' . $request->responseId . ')',
            'description' => $request->description,
        ]);
    }
}
