<?php

namespace App\Http\Services\Shared;

use App\Http\Repositories\Shared\CategoryHasBrandFieldRepository;

class CategoryHasBrandFieldService
{
    public function __construct(protected CategoryHasBrandFieldRepository $categoryHasBrandFieldRepository) {}

    public function getAllCategoryHasBrandFields()
    {
        return $this->categoryHasBrandFieldRepository->getAll(['id', 'category_id']);
    }
}
