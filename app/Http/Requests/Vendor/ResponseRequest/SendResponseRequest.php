<?php

namespace App\Http\Requests\Vendor\ResponseRequest;

use App\Enums\RequestResponseStatusEnum;
use App\Rules\DecimalFormatRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SendResponseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'requestId'       => ['required', 'integer', 'exists:request_customers,id'],
            'price'         => ['required', 'numeric'],
            'notes'       => ['nullable', 'string', 'max:4000'],
            'warranty'       => ['nullable', 'string', 'max:255'],
            'responseRequestAvailability'       => ['required', Rule::enum(RequestResponseStatusEnum::class)],
            'images' => 'nullable|array|max:20',
            'images.*' => 'image|mimes:png,jpg,jpeg,gif,webp|max:5000',
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
