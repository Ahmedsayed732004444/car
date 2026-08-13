<?php

namespace App\Http\Repositories\Dashboard\ComplaintManagemnt;

use App\Models\Complaint;
use App\Traits\HandlesDatatablesTrait;
use Symfony\Component\HttpFoundation\Request;

class ComplaintManagemntRepository
{
    use HandlesDatatablesTrait;

    public function index(Request $request, $searchValue)
    {
        $query = Complaint::query()
            ->leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->searchValueFilter($searchValue)
            ->select(
                'complaints.id',
                'complaints.user_id',
                'users.name',
                'users.phone',
                'complaints.subject',
                'complaints.title',
                'complaints.description',
                'complaints.status',
                'complaints.created_at as date_complaint',
            );

        return $this->paginateRecordsForDatatables($request, $query);
    }
}
