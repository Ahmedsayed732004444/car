<?php

namespace App\Observers;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Models\CacheStaticDataVersion;
use App\Models\CustomField;
use App\Utils\CacheUtils;

class CustomFieldObserver
{
    public function created(CustomField $customField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
        CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
        CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
    }

    public function updated(CustomField $customField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
        CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
        CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
    }

    public function deleted(CustomField $customField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
        CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
        CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
    }

    public function restored(CustomField $customField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
        CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
        CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
    }

    public function forceDeleted(CustomField $customField): void
    {
        CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
        CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
        CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
    }
}
