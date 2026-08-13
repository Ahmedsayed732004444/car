<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestEligibleVendor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'request_id',
        'vendor_id',
        'notification_sent',
    ];

    protected $casts = [
        'notification_sent' => 'boolean',
    ];

    public function scopeJoinRequestCustomer($query)
    {
        return $query->join('request_customers', 'request_eligible_vendors.request_id', '=', 'request_customers.id');
    }

    public function scopeLeftJoinCategoryToRequest($query)
    {
        return $query->leftJoin('categories', 'request_customers.category_id', '=', 'categories.id');
    }

    public function scopeLeftJoinCityCustomerToRequest($query)
    {
        return $query->leftJoin('cities', 'request_customers.customer_city_id', '=', 'cities.id');
    }
}
