<?php

namespace App\Http\Services\Dashboard\ResponseManagement;

use App\Http\Repositories\Dashboard\RequestResponseManagement\ResponseManagementRepository;
use App\Http\Services\BaseService;
use App\Models\RequestResponse;
use Illuminate\Http\Request;

class ResponseManagementService extends BaseService
{
    public function __construct(protected ResponseManagementRepository $repo) {}

    public function index(Request $request, $requestId)
    {
        $searchValue = $request->input('search.value');

        $recordsCount =  $this->repo->getTotalRecordsCount(RequestResponse::class);
        $recordsCountwithFilter = $this->repo->recordsCountResponseWithFilter($requestId, $searchValue);
        $records = $this->repo->index($request, $requestId, $searchValue);

        return $this->repo->formatResponseDataTables(
            draw: $request->input('draw'),
            recordsCount: $recordsCount,
            recordsCountwithFilter: $recordsCountwithFilter,
            records: $records
        );
    }
}
