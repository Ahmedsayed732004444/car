<?php

namespace App\Observers;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Models\CacheStaticDataVersion;
use App\Models\CategoryHasBrandField;
use App\Utils\CacheUtils;

class CategoryHasBrandFieldObserver
{
    public function created(CategoryHasBrandField $categoryHasBrandField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
        CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
    }

    public function updated(CategoryHasBrandField $categoryHasBrandField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
        CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
    }

    public function deleted(CategoryHasBrandField $categoryHasBrandField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
        CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
    }

    public function restored(CategoryHasBrandField $categoryHasBrandField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
        CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
    }

    public function forceDeleted(CategoryHasBrandField $categoryHasBrandField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
        CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
    }
}
