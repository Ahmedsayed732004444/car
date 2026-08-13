<?php

namespace App\Observers;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Models\CacheStaticDataVersion;
use App\Models\City;
use App\Utils\CacheUtils;
use Illuminate\Support\Facades\Log;

class CityObserver
{
    // Handle the City events.

    public function created(City $city): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
        CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
    }

    public function updated(City $city): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
        CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
    }

    public function deleted(City $city): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
        CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
    }

    public function restored(City $city): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
        CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
    }

    public function forceDeleted(City $city): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
        CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
    }
}
