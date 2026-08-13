<?php

namespace App\Rules;

use App\Models\CategoryHasBrandField;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RequiredBrandIfCategoryHasBrandRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $categoryId = request()->input('categoryId');

        if (!$categoryId) {
            return; // لو ما فيه categoryId ما نتحقق
        }

        $isHasBrand = CategoryHasBrandField::where('category_id', $categoryId)->exists();

        if ($isHasBrand) {
            if (empty($value)) {
                $fail('الرجاء إدخال الماركة');
            }
        }
    }
}
