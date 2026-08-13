<?php

namespace App\Http\Controllers\API\V1\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Services\Vendor\NewRequestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewRequestController extends Controller
{
    public function __construct(protected NewRequestService $newRequestService) {}

    public function getNewRequests(Request $request)
    {
        $result = $this->newRequestService->getNewRequests();

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($result));
    }

    public function detailsNewRequests(Request $request, $requestId)
    {
        return $this->newRequestService->detailsNewRequests($request, $requestId);
    }
}
