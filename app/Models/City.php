<?php

namespace App\Models;

use App\Utils\CacheUtils;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class City extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'city_name_ar',
        'city_name_en',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public static function getCitiesCached()
    {
        return CacheUtils::rememberForever(CacheUtils::citiesCacheStaticDataAppKey(), function () {
            return self::get(['id', 'city_name_ar', 'city_name_en', 'is_active']);
        });
    }
}
