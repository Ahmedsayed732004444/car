<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

trait HandlesDatatablesTrait
{
    /**
     * For Fetch records or data with paginate For Datatables
     */
    public function paginateRecordsForDatatables(Request $request, $query)
    {
        $this->applyOrderBy($request, $query);

        return $this->applyPaginate($request, $query);
    }

    private function applyOrderBy(Request $request, $query)
    {
        $orderColumnIndex = $request->input('order.0.column', 0);
        $getColumn = $request->input("columns.{$orderColumnIndex}");
        $orderColumnName = !empty($getColumn['data']) ? $getColumn['data'] : $getColumn['name'];
        $orderDirection = $request->input('order.0.dir', 'asc');

        $query->orderBy($orderColumnName, $orderDirection);
    }

    private function applyPaginate(Request $request, $query)
    {
        // $rowperpage = $request->input("length"); // Rows display per page
        return $query->skip($request->input('start'))
            ->take($request->input('length'))
            ->get();
    }

    /**
     * For get total records Count For Datatables
     *
     * Ex: getTotalRecordsCount(User::class)
     */
    public function getTotalRecordsCount(string $modelClass)
    {
        return $modelClass::select('count(*) as allcount')->count();
    }

    public function formatResponseDataTables($draw, $recordsCount, $recordsCountwithFilter, $records)
    {
        return response()->json([
            "draw" => intval($draw),
            "iTotalRecords" => $recordsCount,
            "iTotalDisplayRecords" => $recordsCountwithFilter,
            "aaData" =>  $records
        ]);
    }
}
