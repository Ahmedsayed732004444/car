<?php

namespace App\Models;

use App\Utils\CacheUtils;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandCar extends Model
{
    use SoftDeletes;

    protected $fillable = ['brand_name_ar', 'brand_name_en'];

    public static function getBrandCarsCached()
    {
        return CacheUtils::rememberForever(CacheUtils::brandsCarsCacheStaticDataAppKey(), function () {
            return self::get(['id', 'brand_name_ar', 'brand_name_en']);
        });
    }
}
