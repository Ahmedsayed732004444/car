<?php

namespace App\Http\Services\Shared;

use App\Http\Repositories\Shared\CategoryRepository;

class CategoryService
{
    public function __construct(protected CategoryRepository $categoryRepository) {}

    public function getAllCategories()
    {
        return $this->categoryRepository->getAll(['id', 'cat_name_ar', 'cat_name_en', 'cat_icon_path', 'commission_type', 'commission', 'active']);
    }
}
