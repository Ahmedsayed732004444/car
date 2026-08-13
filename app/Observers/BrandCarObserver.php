<?php

namespace App\Observers;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Models\BrandCar;
use App\Models\CacheStaticDataVersion;
use App\Utils\CacheUtils;

class BrandCarObserver
{
    public function created(BrandCar $brandCar): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
        CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
    }

    public function updated(BrandCar $brandCar): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
        CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
    }

    public function deleted(BrandCar $brandCar): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
        CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
    }

    public function restored(BrandCar $brandCar): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
        CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
    }

    public function forceDeleted(BrandCar $brandCar): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
        CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
    }
}
