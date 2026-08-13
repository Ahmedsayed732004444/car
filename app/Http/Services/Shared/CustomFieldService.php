<?php

namespace App\Http\Services\Shared;

use App\Http\Repositories\Shared\CustomFieldRepository;
use App\Utils\CacheUtils;

class CustomFieldService
{
    public function __construct(protected CustomFieldRepository $customFieldRepository) {}

    public function getAllCustomFields()
    {
        CacheUtils::remember(CacheUtils::customFieldsCacheStaticDataAppKey(), function () {
            return $this->customFieldRepository->getAll(['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length']);
        }, now()->addMinutes(30));
        return $this->customFieldRepository->getAll(['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length']);
    }

    public function getCustomFieldsByCategoryId(int $categoryId)
    {
        return $this->customFieldRepository->getCustomFieldsByCategoryId($categoryId);
    }
}
