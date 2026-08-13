<?php

namespace App\Http\Requests\Dashboard\CustomField;

use App\Enums\CustomFieldTypeEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SaveCustomFieldRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('admin')->check();
    }

    public function rules(): array
    {
        return [
            'categoryId' => ['required', 'integer', 'exists:categories,id'],
            'labelAr' => 'required|string|max:150',
            'fieldName' => [
                'required',
                'string',
                'max:100'
            ],
            'fieldType' => ['required', 'string', Rule::enum(CustomFieldTypeEnum::class)],
            'isRequired' => ['required', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'categoryId.required' => 'يجب تحديد القسم.',
            'categoryId.integer' => 'معرّف القسم يجب أن يكون رقمًا صحيحًا.',
            'categoryId.exists' => 'القسم المحدد غير موجود.',

            'labelAr.required' => 'يجب إدخال العنوان .',
            'labelAr.string' => 'العنوان  يجب أن يكون نصًا.',
            'labelAr.max' => 'العنوان  يجب ألا يتجاوز 150 حرفًا.',

            'fieldName.required' => 'يجب إدخال اسم الحقل.',
            'fieldName.string' => 'اسم الحقل يجب أن يكون نصًا.',
            'fieldName.max' => 'اسم الحقل يجب ألا يتجاوز 100 حرف.',

            'fieldType.required' => 'يجب تحديد نوع الحقل.',
            'fieldType.string' => 'نوع الحقل يجب أن يكون نصًا.',

            'isRequired.required' => 'يجب تحديد ما إذا كان الحقل إلزاميًا أم لا.',
            'isRequired.boolean' => 'قيمة إلزامية الحقل يجب أن تكون صحيحة أو خاطئة.',
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
