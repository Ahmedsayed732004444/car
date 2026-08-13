<?php

namespace App\Http\Repositories\Dashboard;

use App\Models\Category;
use App\Models\CategoryHasBrandField;

class CategoryRepository
{
    public function all()
    {
        return Category::get();
    }

    public function createCategory(array $data)
    {
        return Category::create($data);
    }

    public function addCategoryHasBrandField($categoryId)
    {
        CategoryHasBrandField::create(['category_id' => $categoryId]);
    }

    public function updateCategoryHasBrandField($categoryId)
    {
        CategoryHasBrandField::where('category_id', $categoryId)->updateOrCreate(['category_id' => $categoryId]);
    }

    public function deleteCategoryHasBrandField($categoryId)
    {
        $model = CategoryHasBrandField::where('category_id', $categoryId)->first();
        $model->delete();
    }

    public function editCategory($categoryId)
    {
        return Category::leftJoin('category_has_brand_fields', 'categories.id', '=', 'category_has_brand_fields.category_id')
            ->where('categories.id', $categoryId)
            ->select('categories.*', 'category_has_brand_fields.id as is_category_has_brand_field')
            ->first();
    }

    public function updateCategory(array $data, $categoryId)
    {
        $model = Category::where('id', $categoryId)->first(['id']);
        return $model->update($data);
    }

    public function deleteCategory($categoryId)
    {
        $model = Category::where('id', $categoryId)->first(['id']);
        if (!$model)
            return false;
        return $model->delete();
    }

    public function getCategoryNameById(int $categoryId)
    {
        return Category::where('id', $categoryId)->first(['cat_name_ar']);
    }
}
