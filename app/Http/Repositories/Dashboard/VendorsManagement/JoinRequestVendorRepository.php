<?php

namespace App\Http\Repositories\Dashboard\VendorsManagement;

use App\Enums\StatusUserEnum;
use App\Enums\user\UserRoleEnum;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorDocument;
use App\Traits\HandlesDatatablesTrait;
use Illuminate\Http\Request;

class JoinRequestVendorRepository
{
    use HandlesDatatablesTrait;

    public function index(Request $request, $searchValue)
    {
        $query = User::joinVendors()
            ->role(UserRoleEnum::Vendor->value)
            ->searchValueFilter($searchValue)
            ->where('users.status', StatusUserEnum::Pending->value)
            ->select(
                'users.id',
                'vendors.company_name_ar',
                'vendors.commercial_record',
                'users.phone',
                'users.logo',
                'users.created_at as member_since',
            );

        return $this->paginateRecordsForDatatables($request, $query);
    }

    public function recordsCountPendingVendors()
    {
        return $this->queryRecordsCountPendingVendors()
            ->count();
    }

    public function recordsCountPendingVendorsWithFilter($searchValue)
    {
        return $this->queryRecordsCountPendingVendors()
            ->searchValueFilter($searchValue)
            ->count();
    }

    private function queryRecordsCountPendingVendors()
    {
        return User::select('count(*) as allcount')
            ->role(UserRoleEnum::Vendor->value)
            ->where('status', StatusUserEnum::Pending->value);
    }
}
