<?php

namespace App\Http\Requests\User\Request;

use App\Rules\RequiredBrandIfCategoryHasBrandRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class CheckEligibleVendorsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'categoryId' => 'required|integer|exists:categories,id',
            'citiesIdsScope' => 'required|array|min:1',
            'citiesIdsScope.*' => ['required', 'integer'],
            'brandId' => ['nullable', 'integer', new RequiredBrandIfCategoryHasBrandRule],
        ];
    }

    public function messages(): array
    {
        return [
            'categoryId.required' => 'القسم مطلوب',
            'categoryId.integer'  => ' القسم يجب أن يكون رقم صحيح.',
            'categoryId.exists'   => 'القسم المحدد غير موجود في النظام.',

            'citiesIdsScope.required' => 'يجب اختيار مدينة واحدة على الأقل.',
            'citiesIdsScope.array'    => 'تنسيق المدن غير صحيح.',
            'citiesIdsScope.min'      => 'يجب اختيار مدينة واحدة على الأقل.',
            'citiesIdsScope.*.required' => 'كل مدينة في القائمة مطلوبة.',
            'citiesIdsScope.*.integer'  => 'قيمة المدينة يجب أن تكون رقم صحيح.',

            'brandId.integer'  => 'حقل الماركة يجب أن يكون رقم صحيح.',
            'brandId.nullable' => 'حقل الماركة اختياري، لكن إن تم إدخاله يجب أن يكون صحيح.',
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
