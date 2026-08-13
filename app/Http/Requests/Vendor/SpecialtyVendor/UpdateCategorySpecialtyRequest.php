<?php

namespace App\Http\Requests\Vendor\SpecialtyVendor;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateCategorySpecialtyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'categoriesIds' => ['required', 'array', 'min:1'],
            'categoriesIds.*' => ['required', 'integer', 'exists:categories,id'],
        ];
    }
    public function messages(): array
    {
        return [
            'categoriesIds.required' => 'يجب تحديد الأقسام المطلوبة.',
            'categoriesIds.array' => 'يجب أن تكون قائمة الأقسام في شكل مصفوفة.',
            'categoriesIds.min' => 'يجب اختيار قسم واحد على الأقل.',
            'categoriesIds.*.required' => 'كل قسم في القائمة مطلوب.',
            'categoriesIds.*.integer' => 'يجب أن يكون معرف القسم رقمًا صحيحًا.',
            'categoriesIds.*.exists' => 'أحد الأقسام المحددة غير موجود في قاعدة البيانات.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = response()->json($validator->errors(), 422);
        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
