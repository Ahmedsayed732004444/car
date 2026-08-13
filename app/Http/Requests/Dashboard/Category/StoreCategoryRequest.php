<?php

namespace App\Http\Requests\Dashboard\Category;

use App\Enums\CommissionTypeEnum;
use Closure;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('admin')->check();
    }

    public function rules(): array
    {
        return [
            'catNameAr' => 'required|string|max:100|unique:categories,cat_name_ar',
            'commissionType' => ['required', 'string', Rule::enum(CommissionTypeEnum::class)],
            'commission' => [
                'required',
                'numeric',
                function (string $attribute, mixed $value, Closure $fail) {
                    if (request()->input('commissionType') === CommissionTypeEnum::Rate->value && ($value < 0 || $value > 100)) {
                        $fail('النسبة يجب أن تكون بين 0 و 100.');
                    }
                }
            ],
            'categoryHasBrand' => ['required', 'boolean'],
            'file' => 'required|image|mimes:png,jpg,jpeg,webp|max:5000|dimensions:min_width=64,min_height=64,max_width=64,max_height=64'
        ];
    }

    public function messages(): array
    {
        return [
            'catNameAr.required' => 'اسم التصنيف بالعربية مطلوب.',
            'catNameAr.string' => 'اسم التصنيف يجب أن يكون نصًا.',
            'catNameAr.max' => 'اسم التصنيف لا يجب أن يتجاوز 100 حرف.',
            'catNameAr.unique' => 'اسم التصنيف هذا موجود بالفعل.',

            'commissionType.required' => 'نوع العمولة مطلوب.',
            'commissionType.string' => 'نوع العمولة يجب أن يكون نصًا صحيحًا.',
            'commissionType.enum' => 'نوع العمولة المحدد غير صالح.',

            'commission.required' => 'قيمة العمولة مطلوبة.',
            'commission.numeric' => 'قيمة العمولة يجب أن تكون رقمًا.',

            'categoryHasBrand.required' => 'يجب تحديد ما إذا كان التصنيف يحتوي على ماركة .',
            'categoryHasBrand.boolean' => 'قيمة الحقل يجب أن تكون صحيحة أو خاطئة (true/false).',

            'file.required' => 'الصورة مطلوبة.',
            'file.image' => 'الملف يجب أن يكون صورة.',
            'file.mimes' => 'يجب أن تكون الصورة من نوع PNG أو JPG أو JPEG أو WEBP.',
            'file.max' => 'حجم الصورة يجب ألا يتجاوز 5 ميجابايت.',
            'file.dimensions' => 'أبعاد الصورة يجب أن تكون بين 64×64 .',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
