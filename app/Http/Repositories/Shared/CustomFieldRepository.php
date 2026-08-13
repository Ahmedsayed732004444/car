<?php

namespace App\Http\Repositories\Shared;

use App\Interfaces\RepositoryInterface;
use App\Models\CustomField;
use App\Utils\CacheUtils;

class CustomFieldRepository implements RepositoryInterface
{
    public function create(array $data) {}
    public function first(int $id, $columns = ['*'])
    {
        return CustomField::where('id', $id)->first($columns);
    }
    public function update(int $id, array $attributes = []) {}
    public function delete(int $id) {}

    public function getAll($columns = ['*'])
    {
        return CustomField::get($columns);
    }

    public function getCustomFieldsByCategoryId(int $categoryId)
    {
        return CacheUtils::remember(CacheUtils::customFieldsByCategoryIdCacheAppKey($categoryId), function () use ($categoryId) {
            return CustomField::where('category_id', $categoryId)->get();
        }, now()->addMinutes(30));
    }
}
