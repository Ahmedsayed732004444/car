<?php

namespace App\Http\Repositories\Dashboard;

use App\Models\CustomField;

class CustomFieldRepository
{
    public function getCustomFieldsByCategoryId(int $categoryId)
    {
        return CustomField::where('custom_fields.category_id', $categoryId)->get();
    }
}
