<?php

namespace App\Http\Requests\User\Request;

use App\Enums\CustomFieldTypeEnum;
use App\Http\Repositories\Shared\CustomFieldRepository;
use App\Rules\RequiredBrandIfCategoryHasBrandRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ConfirmOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    // prepare the data for validation.
    protected function prepareForValidation(): void
    {
        $brandId = $this->brandId;
        if (is_string($brandId) && str_starts_with(trim($brandId), '[')) {
            $brandId = json_decode($brandId, true);
        } elseif (is_numeric($brandId)) {
            $brandId = (int) $brandId;
        }

        $this->merge([
            'categoryId' => (int) $this->categoryId,
            'customerCityId' => (int) $this->customerCityId,
            'citiesIdsScope' => is_string($this->citiesIdsScope) ? json_decode($this->citiesIdsScope, true) : $this->citiesIdsScope,
            'brandId' => $brandId,
        ]);
    }

    public function rules(): array
    {
        return [
            'categoryId'       => ['required', 'integer', 'exists:categories,id'],
            'customerCityId'  => ['required', 'integer'],
            'description'       => ['required', 'string', 'max:4000'],
            'partName'          => ['nullable', 'string', 'max:255'],
            'carName'           => ['nullable', 'string', 'max:255'],
            'citiesIdsScope' => 'required|array|min:1',
            'citiesIdsScope.*' => ['required', 'integer'],
            'brandId' => ['nullable', new RequiredBrandIfCategoryHasBrandRule],
            'images' => 'nullable|array|max:20',
            'images.*' => 'image|mimes:png,jpg,jpeg,gif,webp|max:5000',
            'customFields' => [
                'nullable',
                'json',
                function ($attribute, $value, $fail) {
                    if (is_array($value)) {

                        $categoryId = request()->input('categoryId');
                        $customFieldsList = (new CustomFieldRepository())->getCustomFieldsByCategoryId($categoryId);

                        foreach ($customFieldsList as $item) {
                            if ($item->field_type != CustomFieldTypeEnum::File->value) {
                                $customField = $value[$item->field_name];
                                if ($item->is_required == true && empty($customField)) {
                                    $fail("حقل {$item->label_ar} مطلوب");
                                }

                                if ($item->field_type == CustomFieldTypeEnum::Number->value && !is_numeric($customField)) {
                                    $fail("حقل {$item->label_ar} يجب ان يكون رقم");
                                }

                                if ($item->field_type == CustomFieldTypeEnum::Date->value && !is_date($customField)) {
                                    $fail("حقل {$item->label_ar} يجب ان يكون تاريخ");
                                }

                                if ($item->field_type == CustomFieldTypeEnum::TextArea->value && !is_string($customField)) {
                                    $fail("حقل {$item->label_ar} يجب ان يكون نص");
                                }

                                if ($item->field_type == CustomFieldTypeEnum::Select->value && !is_array($customField)) {
                                    $fail("حقل {$item->label_ar} يجب ان يكون اختيار");
                                }

                                if ($item->field_type == CustomFieldTypeEnum::Checkbox->value && !is_array($customField)) {
                                    $fail("حقل {$item->label_ar} يجب ان يكون اختيار");
                                }

                                if ($item->field_type == CustomFieldTypeEnum::Radio->value && !is_array($customField)) {
                                    $fail("حقل {$item->label_ar} يجب ان يكون اختيار");
                                }

                                if ($item->field_type == CustomFieldTypeEnum::Text->value && !is_string($customField)) {
                                    $fail("حقل {$item->label_ar} يجب ان يكون نص");
                                }
                            }
                        }
                    }
                }
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'categoryId.required'      => 'القسم مطلوبة.',
            'categoryId.exists'        => 'القسم غير موجودة.',
            'customerCityId.required' => 'المدينة مطلوبة.',
            'description.required'      => 'الوصف مطلوب.',
            'description.max'           => 'الوصف يجب ألا يتجاوز 4000 حرف.',
            'max_price.gte'             => 'السعر الأعلى يجب أن يكون أكبر أو يساوي السعر الأدنى.',
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
