<?php

namespace App\Utils;

use App\Enums\EntityNameCacheStaticDataEnum;
use Illuminate\Support\Facades\Cache;
use Closure;

enum CachePrefix: string
{
    case CacheStaticData = 'app-cache_static_data-';
    case appCache = 'app-cache-';
}


class CacheUtils
{
    public static function cacheStaticDataVersionAppKey(string $entityName): string
    {
        return CachePrefix::CacheStaticData->value . "version-{$entityName}";
    }

    public static function citiesCacheStaticDataAppKey(): string
    {
        return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::Cities->value;
    }

    public static function brandsCarsCacheStaticDataAppKey(): string
    {
        return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::BrandsCars->value;
    }

    public static function categoriesCacheStaticDataAppKey(): string
    {
        return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::Categories->value;
    }

    public static function categoryHasBrandFieldCacheStaticDataAppKey(): string
    {
        return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::CategoryHasBrandField->value;
    }

    public static function customFieldsCacheStaticDataAppKey(): string
    {
        return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::CustomFields->value;
    }

    public static function customFieldsByCategoryIdCacheAppKey(int $categoryId): string
    {
        return CachePrefix::appCache->value . "custom_fields_by_category_id-{$categoryId}";
    }

    public static function adsBannersCacheStaticDataAppKey(): string
    {
        return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::AdsBanner->value;
    }

    // -------------------- cache operations -------------------------

    /**
     * Removes one or more items from the cache.
     *
     * @param string ...$keys The cache keys to be removed.
     * @return void
     */
    public static function forget(string $keys): void
    {
        Cache::forget($keys);
    }

    /**
     * Retrieves a value from the cache, or stores it if it does not exist.
     *
     * @param string $key The cache key.
     * @param \Closure $callback The function to execute to retrieve the data if not present in the cache.
     * @param \DateTimeInterface|\DateInterval|float|int|null $ttl The cache duration (in seconds).
     *
     * @return mixed The cached value or the value retrieved.
     */
    public static function remember(string $key, Closure $callback, \DateTimeInterface|\DateInterval|float|int|null $ttl): mixed
    {
        return Cache::remember($key, $ttl, $callback);
    }

    /**
     * Retrieves a value from the cache, or stores it forever if it does not exist.
     *
     * @param string $key The cache key.
     * @param \Closure $callback The function to execute to retrieve the data if not present in the cache.
     * @return mixed The cached value or the value retrieved.
     */
    public static function rememberForever(string $key, Closure $callback): mixed
    {
        return Cache::rememberForever($key, $callback);
    }

    // جلب تفاصيل دورة معينة، وتخزينها إلى الأبد
    // $course = CacheUtils::rememberForever(CacheUtils::courseDetailsKey(456), function () {
    //    return \App\Models\Course::find(456);
    // });

    /**
     * Clears all cache items.
     *
     * @return void
     */
    public static function flushAll(): void
    {
        Cache::flush();
    }

    // public static function clearAllDefinedCache(): void
    // {
    //     $allKeys = array_map(fn(CacheKey $key) => $key->value, CacheKey::cases());
    //     Cache::forget($allKeys);
    // }
}
