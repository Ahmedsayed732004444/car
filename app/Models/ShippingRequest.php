<?php

namespace App\Models;

use App\Enums\StatusShippingRequestEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ShippingRequest extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'request_id',
        'response_id',
        'order_number',
        'name_origin_vendor',
        'city_origin_vendor',
        'address_origin_vendor',
        'lat_origin_vendor',
        'lng_origin_vendor',
        'phone_origin_vendor',
        'length',
        'width',
        'height',
        'weight',
        'id_number_user',
        'city_origin_dimensions',
        'address_origin_dimensions',
        'phone_origin_dimensions',
        'status',
        'fee_cheapest_shipping',
        'amount_rate_app',
        'is_user_confirmed',
        'oto_id',
    ];

    protected $casts = [
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'weight' => 'double',
        'fee_cheapest_shipping' => 'double',
        'amount_rate_app' => 'double',
        'is_user_confirmed' => 'boolean',
        'status' => StatusShippingRequestEnum::class,
    ];

    protected function shippingRequestDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) =>
            $value
                ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
                : null
        );
    }

    protected function scopeSearchValueFilter($query, $value)
    {
        $query->when($value, function ($query, $value) {
            return $query->whereAny([
                'shipping_requests.id',
                'shipping_requests.request_id',
                'shipping_requests.response_id',
                'shipping_requests.city_origin_vendor',
                'shipping_requests.city_origin_dimensions',
                'shipping_requests.created_at',
            ], 'like', '%' . $value . '%');
        });
    }

    protected function scopeConfirmShippingFilter($query, $value)
    {
        return $query->when($value, function ($query, $value) {
            return $query->where('shipping_requests.is_user_confirmed', $value);
        });
    }
}
