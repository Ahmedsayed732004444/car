<?php

namespace App\Http\Repositories\User\MyRequests;

use App\Models\BrandCar;
use App\Models\City;
use App\Models\CustomField;
use App\Models\RequestBrandScope;
use App\Models\RequestCustomer;
use App\Models\RequestCustomFieldValue;
use App\Models\RequestImage;
use App\Models\RequestResponse;
use Illuminate\Support\Facades\Log;

class MyRequestUserRepository
{
    public function getMyRequest()
    {
        return RequestCustomer::leftJoinCity()
            ->leftJoinCategory()
            ->where('request_customers.user_id', getCurrUserIdHelper())
            ->selectRaw(
                'request_customers.id as request_id,
                request_customers.status as request_status,
                categories.cat_name_ar,
                request_customers.created_at as request_date,
                cities.city_name_ar as city_customer_name_ar,
                (SELECT COUNT(id) FROM request_responses WHERE request_responses.request_id = request_customers.id) as count_response
                ',
            )
            ->orderBy('request_customers.id', 'desc')
            ->paginate(10);
    }

    public function getMyRequestById(int $requestId)
    {
        return RequestCustomer::leftJoinCategory()
            ->leftJoinCity()
            ->where('request_customers.id', $requestId)
            ->where('request_customers.user_id', getCurrUserIdHelper())
            ->select(
                'request_customers.id as request_id',
                'categories.cat_name_ar',
                'request_customers.created_at as request_date',
                'cities.city_name_ar as city_customer_name_ar',
                'request_customers.description',
                'request_customers.cities_ids_scope as cities',
                'request_customers.status as request_status',
            )
            ->first();
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

    public function getResponsesMyRequest(int $requestId)
    {
        Log::info('------------getResponsesMyRequest----------');
        return RequestResponse::joinRequestCustomer()
            ->leftJoinVendor()
            ->leftJoinVendorToUser()
            ->leftJoinShippingRequest()
            ->where('request_responses.request_id', $requestId)
            ->where('request_customers.user_id', getCurrUserIdHelper())
            ->select(
                'request_responses.id as response_id',
                'request_responses.status as response_status',
                'request_responses.created_at as response_date',
                'request_responses.price as price_response',
                'request_responses.warranty as warranty_response',
                'vendors.company_name_ar',
                'users.logo as vendor_logo',
                'shipping_requests.id as shipping_request_id',
                'shipping_requests.status as shipping_request_status',

            )
            ->orderBy('request_responses.id', 'desc')
            ->paginate(20);
    }

    public function getResponseRequestById($responseId)
    {
        return RequestResponse::joinRequestCustomer()
            ->leftJoinVendor()
            ->leftJoinVendorToUser()
            ->where('request_responses.id', $responseId)
            ->where('request_customers.user_id', getCurrUserIdHelper())
            ->select(
                'request_responses.id as response_id',
                'request_responses.request_id',
                'request_responses.vendor_id',
                'request_responses.status as response_status',
                'request_responses.created_at as response_date',
                'request_responses.price as price_response',
                'request_responses.note as note_response',
                'request_responses.warranty as warranty_response',
                'vendors.company_name_ar',
                'vendors.phone_contact',
                'vendors.is_hide_phone_contact',
                'users.logo as vendor_logo',
                'users.created_at as vendor_member_since',
            )
            ->first();
    }
}
