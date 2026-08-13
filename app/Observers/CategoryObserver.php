<?php

namespace App\Observers;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Models\CacheStaticDataVersion;
use App\Models\Category;
use App\Utils\CacheUtils;

class CategoryObserver
{
    public function created(Category $category): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
        CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
    }

    public function updated(Category $category): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
        CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
    }

    public function deleted(Category $category): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
        CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
    }

    public function restored(Category $category): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
        CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
    }

    public function forceDeleted(Category $category): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
        CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
    }
}
