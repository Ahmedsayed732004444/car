<?php

namespace App\Http\Repositories\Dashboard\RequestResponseManagement;

use App\Models\RequestCustomer;
use App\Models\RequestResponse;
use App\Traits\HandlesDatatablesTrait;
use Illuminate\Http\Request;

class ResponseManagementRepository
{
    use HandlesDatatablesTrait;

    public function index(Request $request, $requestId, $searchValue)
    {
        $query = RequestResponse::query()->joinRequestCustomer()
            ->leftJoinVendor()
            ->leftJoinVendorToUser()
            ->where('request_responses.request_id', $requestId)
            ->searchValueFilter($searchValue)
            ->select(
                'request_responses.id as response_id',
                'request_responses.status as response_status',
                'request_responses.created_at as response_date',
                'request_responses.price as price_response',
                'request_responses.warranty as warranty_response',
                'request_responses.note as note_response',
                'vendors.company_name_ar',
                'vendors.user_id',
            );

        return $this->paginateRecordsForDatatables($request, $query);
    }

    public function recordsCountResponseWithFilter($requestId, $searchValue)
    {
        return RequestResponse::select('count(*) as allcount')->where('request_responses.request_id', $requestId)->searchValueFilter($searchValue)->count();
    }
}
