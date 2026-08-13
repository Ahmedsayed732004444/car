<?php

namespace App\Http\Repositories\User\Requests;

use App\Models\RequestBrandScope;
use App\Models\RequestCustomer;
use App\Models\RequestCustomFieldValue;
use App\Models\RequestEligibleVendor;
use App\Models\ShippingRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;

class RequestRepository
{
    private function queryFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)
    {
        return Vendor::joinUsers()
            ->joinVendorSpecialties()
            ->joinVendorCities()
            ->leftJoinVendorBrandCars($categoryId)
            ->whereCategoryVendorSpecialty($categoryId)
            ->whereInVendorCities($citiesIdsScope)
            ->isActive()
            ->when($brandId, function ($query) use ($brandId) {
                $query->where(function ($q) use ($brandId) {
                    $q->where('vendor_specialties.is_receive_all_brand_cars', true);

                    if (!empty($brandId)) {
                        $q->orWhere('vendor_brand_cars.brand_car_id', $brandId);
                    }
                });
            })
            ->distinct();
    }

    public function countFilterEligibleVendors(Request $request): int
    {
        $categoryId = $request->categoryId;
        $citiesIdsScope = $request->citiesIdsScope;
        $brandId = $request->input('brandId');

        return $this->queryFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)->count();
    }

    public function getFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)
    {
        return $this->queryFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)->get(['vendors.id', 'vendors.user_id']);
    }

    public function createRequest(array $data): RequestCustomer
    {
        return RequestCustomer::create($data);
    }

    public function createRequestBrandScope(int $requestId, int $brandId): RequestBrandScope
    {
        return RequestBrandScope::create([
            'request_id' => $requestId,
            'brand_type' => 'brand_cars',
            'brand_ids_scope' => [$brandId],
        ]);
    }

    public function createRequestCustomFieldValues(array $data): RequestCustomFieldValue
    {
        return RequestCustomFieldValue::create($data);
    }

    public function createRequestEligibleVendors(array $data): RequestEligibleVendor
    {
        return RequestEligibleVendor::create($data);
    }

    public function storeShippingRequest(array $data)
    {
        return ShippingRequest::create($data);
    }
}
