<?php

namespace App\Http\Repositories\Dashboard\RequestsManagement;

use App\Models\BrandCar;
use App\Models\City;
use App\Models\CustomField;
use App\Models\RequestBrandScope;
use App\Models\RequestCustomer;
use App\Models\RequestCustomFieldValue;
use App\Models\RequestImage;
use App\Traits\HandlesDatatablesTrait;
use Illuminate\Http\Request;

class RequestsManagementRepository
{
    use HandlesDatatablesTrait;

    public function index(Request $request, $searchValue)
    {
        $query = RequestCustomer::leftJoinCity()
            ->leftJoinCategory()
            ->searchValueFilter($searchValue)
            ->selectRaw(
                'request_customers.id as request_id,
                request_customers.status as request_status,
                categories.cat_name_ar,
                request_customers.created_at as request_date,
                cities.city_name_ar as city_customer_name_ar,
                (SELECT COUNT(id) FROM request_responses WHERE request_responses.request_id = request_customers.id) as count_response
                ',
            )
            ->orderBy('request_customers.id', 'desc');

        return $this->paginateRecordsForDatatables($request, $query);
    }

    public function recordsCountRequestsCustomerWithFilter($searchValue)
    {
        return RequestCustomer::select('count(*) as allcount')->searchValueFilter($searchValue)->count();
    }

    public function getRequestById(int $requestId)
    {
        return RequestCustomer::leftJoinCategory()
            ->leftJoinCity()
            ->leftJoinUser()
            ->where('request_customers.id', $requestId)
            ->select(
                'request_customers.id as request_id',
                'request_customers.user_id',
                'categories.cat_name_ar',
                'request_customers.created_at as request_date',
                'cities.city_name_ar as city_customer_name_ar',
                'request_customers.description',
                'request_customers.cities_ids_scope as cities',
                'request_customers.status as request_status',
                'users.name as user_name',
                'users.phone as user_phone',
                'users.logo as user_logo',
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

    public function getRequestImages($requestId)
    {
        return RequestImage::where('request_id', $requestId)->get(['image_name']);
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
}
