<?php

namespace App\Observers;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Models\AdsBanner;
use App\Models\CacheStaticDataVersion;
use App\Utils\CacheUtils;

class AdsBannerObserver
{
    /**
     * Handle the AdsBanner "created" event.
     */
    public function created(AdsBanner $adsBanner): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::AdsBanner->value);
        CacheUtils::forget(CacheUtils::adsBannersCacheStaticDataAppKey());
    }

    /**
     * Handle the AdsBanner "updated" event.
     */
    public function updated(AdsBanner $adsBanner): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::AdsBanner->value);
        CacheUtils::forget(CacheUtils::adsBannersCacheStaticDataAppKey());
    }

    /**
     * Handle the AdsBanner "deleted" event.
     */
    public function deleted(AdsBanner $adsBanner): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::AdsBanner->value);
        CacheUtils::forget(CacheUtils::adsBannersCacheStaticDataAppKey());
    }
}
