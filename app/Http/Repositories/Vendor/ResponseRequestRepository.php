<?php

namespace App\Http\Repositories\Vendor;

use App\Models\RequestBrandScope;
use App\Models\RequestResponse;
use App\Models\RequestResponseImage;

class ResponseRequestRepository
{
    public function getMyResponseRequests()
    {
        return RequestResponse::joinRequestCustomer()
            ->leftJoinCategoryToRequest()
            ->leftJoinCityCustomerToRequest()
            ->leftJoinUserToRequest()
            ->where('request_responses.vendor_id', getCurrVendorIdHelper())
            ->select(
                'request_responses.id as response_id',
                'request_customers.id as request_id',
                'request_responses.vendor_id as vendor_id',
                'categories.cat_name_ar',
                'request_customers.created_at as request_date',
                'cities.city_name_ar as city_customer_name_ar',
                'request_customers.description',
                'request_customers.status as request_status',
                'request_responses.status as response_status',
                'request_responses.created_at as response_date',
                'request_responses.price as price_response',
                'users.name as user_name',
                'users.logo as user_logo',
            )
            ->orderBy('request_responses.id', 'desc')
            ->paginate(10);
    }

    public function sendResponseRequest(array $data)
    {
        return RequestResponse::create($data);
    }

    public function createResponseRequestImage(array $data)
    {
        return RequestResponseImage::create($data);
    }

    public function detailsResponseRequests(int $responseId)
    {
        return RequestResponse::joinRequestCustomer()
            ->leftJoinCategoryToRequest()
            ->leftJoinCityCustomerToRequest()
            ->leftJoinUserToRequest()
            ->where('request_responses.id', $responseId)
            ->where('request_responses.vendor_id', getCurrVendorIdHelper())
            ->select(
                'request_responses.id as response_id',
                'request_customers.id as request_id',
                'categories.cat_name_ar',
                'request_customers.created_at as request_date',
                'cities.city_name_ar as city_customer_name_ar',
                'request_customers.description',
                'request_customers.status as request_status',
                'request_responses.status as response_status',
                'request_responses.created_at as response_date',
                'request_customers.cities_ids_scope as cities',
                'request_responses.price as price_response',
                'request_responses.note as note_response',
                'request_responses.warranty as warranty_response',
                'users.name as user_name',
                'users.phone as user_phone',
                'users.logo as user_logo',
            )
            ->first();
    }
}
