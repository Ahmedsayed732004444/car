<?php

namespace App\Enums;

enum EntityNameCacheStaticDataEnum: string
{
    case Cities = 'cities';
    case BrandsCars = 'brands_cars';
    case Categories = 'categories';
    case CategoryHasBrandField = 'category_has_brand_field';
    case CustomFields = 'custom_fields';
    case AdsBanner = 'ads_banners';
}
