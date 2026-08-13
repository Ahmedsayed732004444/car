<?php

namespace App\Http\Services\Shared;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Http\Services\BaseService;
use App\Models\{
    AdsBanner,
    BrandCar,
    CacheStaticDataVersion,
    Category,
    CategoryHasBrandField,
    City,
    CustomField
};
use App\Utils\CacheUtils;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CacheStaticDataVersionService extends BaseService
{

    public function checkUpdates(Request $request): array
    {
        $this->validate($request->all(), [
            'cities_last_update_at' => 'nullable|date',
            'brands_cars_last_update_at' => 'nullable|date',
            'categories_last_update_at' => 'nullable|date',
            'category_has_brand_field_last_update_at' => 'nullable|date',
            'custom_fields_last_update_at' => 'nullable|date',
            'ads_banners_last_update_at' => 'nullable|date',
        ]);

        $response = $this->initializeResponseStructure();
        $entities = $this->getEntityConfigrations($request);

        foreach ($entities as $entity) {
            $this->processEntityUpdates($entity, $response);
        }

        return $response;
    }

    private function initializeResponseStructure(): array
    {
        return [
            'hasUpdates' => false,
            'dataList' => [],
            'lastUpdateTimesList' => [],
        ];
    }

    private function getEntityConfigrations(Request $request): array
    {
        return [
            [
                'enum' => EntityNameCacheStaticDataEnum::Cities,
                'model' => City::class,
                'columns' => ['id', 'city_name_ar', 'city_name_en', 'is_active'],
                'cacheKey' => CacheUtils::citiesCacheStaticDataAppKey(),
                'clientLastUpdate' => $request->input('cities_last_update_at'),
            ],
            [
                'enum' => EntityNameCacheStaticDataEnum::BrandsCars,
                'model' => BrandCar::class,
                'columns' => ['id', 'brand_name_ar', 'brand_name_en'],
                'cacheKey' => CacheUtils::brandsCarsCacheStaticDataAppKey(),
                'clientLastUpdate' => $request->input('brands_cars_last_update_at'),
            ],
            [
                'enum' => EntityNameCacheStaticDataEnum::Categories,
                'model' => Category::class,
                'columns' => ['id', 'cat_name_ar', 'cat_name_en', 'cat_icon_path', 'commission_type', 'commission', 'active'],
                'cacheKey' => CacheUtils::categoriesCacheStaticDataAppKey(),
                'clientLastUpdate' => $request->input('categories_last_update_at'),
            ],
            [
                'enum' => EntityNameCacheStaticDataEnum::CategoryHasBrandField,
                'model' => CategoryHasBrandField::class,
                'columns' => ['id', 'category_id'],
                'cacheKey' => CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey(),
                'clientLastUpdate' => $request->input('category_has_brand_field_last_update_at'),
            ],
            [
                'enum' => EntityNameCacheStaticDataEnum::CustomFields,
                'model' => CustomField::class,
                'columns' => ['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length'],
                'cacheKey' => CacheUtils::customFieldsCacheStaticDataAppKey(),
                'clientLastUpdate' => $request->input('custom_fields_last_update_at'),
            ],
            [
                'enum' => EntityNameCacheStaticDataEnum::AdsBanner,
                'model' => AdsBanner::class,
                'columns' => ['id', 'ads_image', 'is_active'],
                'cacheKey' => CacheUtils::adsBannersCacheStaticDataAppKey(),
                'clientLastUpdate' => $request->input('ads_banners_last_update_at'),
            ],
        ];
    }

    private function processEntityUpdates(array $entity, array &$response): void
    {
        $entityName = $entity['enum']->value;
        $modelClass = $entity['model'];
        $columns = $entity['columns'];

        $clientLastUpdate = $entity['clientLastUpdate'] ? Carbon::parse($entity['clientLastUpdate']) : null;

        $serverUpdatedAt = CacheStaticDataVersion::getTimestamp($entityName);
        $response['lastUpdateTimesList'][$entityName] = $serverUpdatedAt->toIso8601String();

        if (!$clientLastUpdate || $serverUpdatedAt->gt($clientLastUpdate)) {
            $response['dataList'][$entityName] = CacheUtils::rememberForever($entity['cacheKey'], function () use ($modelClass, $columns) {
                return $modelClass::get($columns);
            });
            $response['hasUpdates'] = true;
        }
    }
}
