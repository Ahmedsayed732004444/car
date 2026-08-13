<?php

namespace App\Http\Services\Dashboard\ComplaintManagemnt;

use App\Enums\ComplaintSubjectEnum;
use App\Http\Repositories\Dashboard\ComplaintManagemnt\ComplaintManagemntRepository;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintManagemntService
{
    public function __construct(protected ComplaintManagemntRepository $repo) {}

    public function index(Request $request)
    {
        $searchValue = $request->input('search.value');

        $recordsCount =  $this->repo->getTotalRecordsCount(Complaint::class);
        $recordsCountwithFilter = Complaint::select('count(*) as allcount')->searchValueFilter($searchValue)->count();;
        $records = $this->repo->index($request, $searchValue);

        foreach ($records as $record) {
            $record->subject = ComplaintSubjectEnum::trans($record->subject);
        }

        return $this->repo->formatResponseDataTables(
            draw: $request->input('draw'),
            recordsCount: $recordsCount,
            recordsCountwithFilter: $recordsCountwithFilter,
            records: $records
        );
    }
}
