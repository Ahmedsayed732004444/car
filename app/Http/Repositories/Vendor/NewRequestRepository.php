<?php

namespace App\Http\Repositories\Vendor;

use App\Enums\RequestCustomerStatusEnum;
use App\Models\BrandCar;
use App\Models\City;
use App\Models\CustomField;
use App\Models\RequestBrandScope;
use App\Models\RequestCustomFieldValue;
use App\Models\RequestEligibleVendor;
use App\Models\RequestImage;

class NewRequestRepository
{
    public function getNewRequests()
    {
        return RequestEligibleVendor::joinRequestCustomer()
            ->leftJoinCategoryToRequest()
            ->leftJoinCityCustomerToRequest()
            ->leftJoin('request_responses', function ($join) {
                $join->on('request_responses.request_id', '=', 'request_customers.id')
                    ->where('request_responses.vendor_id', '=', getCurrVendorIdHelper());
            })
            ->where('request_eligible_vendors.vendor_id', getCurrVendorIdHelper())
            ->where('request_customers.status', RequestCustomerStatusEnum::Open->value)
            ->whereNull('request_responses.id')
            ->select(
                'request_customers.id as request_id',
                'categories.cat_name_ar',
                'request_customers.created_at as request_date',
                'cities.city_name_ar as city_customer_name_ar',
                'request_customers.description',
            )
            ->orderBy('request_customers.id', 'desc')
            ->paginate(10);
    }

    public function detailsRequestEligibleVendor(int $requestId)
    {
        return RequestEligibleVendor::joinRequestCustomer()
            ->leftJoinCategoryToRequest()
            ->leftJoinCityCustomerToRequest()
            ->where('request_eligible_vendors.request_id', $requestId)
            ->where('request_eligible_vendors.vendor_id', getCurrVendorIdHelper())
            ->where('request_customers.status', RequestCustomerStatusEnum::Open->value)
            ->select(
                'request_customers.id as request_id',
                'categories.cat_name_ar',
                'request_customers.created_at as request_date',
                'cities.city_name_ar as city_customer_name_ar',
                'request_customers.description',
                'request_customers.cities_ids_scope as cities',
            )
            ->first();
    }

    public function getRequestBrandNamesScope($requestId)
    {
        $brandIdsScope = RequestBrandScope::where('request_id', $requestId)->first(['brand_ids_scope']);
        $BrandCarsCached =  BrandCar::getBrandCarsCached();

        $brandsNames = [];
        foreach ($brandIdsScope->brand_ids_scope as $brand) {
            $brandsNames[] = $BrandCarsCached->where('id', (int) $brand)->value('brand_name_ar') ?? '';
        }

        return $brandsNames;
    }

    public function getRequestCitiesNamesScope($cityIdsScope)
    {
        $citiesCached =  City::getCitiesCached();

        $citiesNames = [];
        foreach (json_decode($cityIdsScope) as $city) {
            $citiesNames[] = $citiesCached->where('id', (int) $city)->value('city_name_ar') ?? '';
        }

        return $citiesNames;
    }

    public function getRequestCustomFields($requestId)
    {
        $requestCustomFields = RequestCustomFieldValue::where('request_id', $requestId)->get();
        $customFieldsCached = CustomField::getCustomFieldsCached();

        $result = [];
        foreach ($requestCustomFields as $item) {
            $temp = [];
            $temp['key'] = $customFieldsCached->where('id', $item->custom_field_id)->value('label_ar') ?? '';
            $temp['value'] = json_decode($item->value);
            array_push($result, $temp);
        }

        return $result;
    }

    public function getRequestImages($requestId)
    {
        return RequestImage::where('request_id', $requestId)->get(['image_name']);
    }
}
