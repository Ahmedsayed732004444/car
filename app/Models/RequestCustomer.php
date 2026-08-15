<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class RequestCustomer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'customer_city_id',
        'customer_latitude',
        'customer_longitude',
        'description',
        'cities_ids_scope',
        'status',
    ];

    protected $casts = [
        'customer_latitude' => 'decimal:10',
        'customer_longitude' => 'decimal:10',
        'cities_ids_scope' => 'array',
        'status' => 'string',
    ];


    protected function requestDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) =>
            $value
                ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
                : null
        );
    }

    public function scopeLeftJoinCity($query)
    {
        return $query->leftJoin('cities', 'request_customers.customer_city_id', '=', 'cities.id');
    }

    public function scopeLeftJoinCategory($query)
    {
        return $query->leftJoin('categories', 'request_customers.category_id', '=', 'categories.id');
    }

    // left join users
    public function scopeLeftJoinUser($query)
    {
        return $query->leftJoin('users', 'request_customers.user_id', '=', 'users.id');
    }

    protected function scopeSearchValueFilter($query, $value)
    {
        $query->when($value, function ($query, $value) {
            return $query->whereAny([
                'request_customers.id',
                'request_customers.created_at',
            ], 'like', '%' . $value . '%');
        });
    }
}
