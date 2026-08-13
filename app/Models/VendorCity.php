<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorCity extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'vendor_id',
        'city_id',
        'address_ar',
        'address_en',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'latitude' => 'decimal:10',
        'longitude' => 'decimal:10',
    ];
}
