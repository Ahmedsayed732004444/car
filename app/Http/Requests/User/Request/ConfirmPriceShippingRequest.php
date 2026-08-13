<?php

namespace App\Http\Requests\User\Request;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class ConfirmPriceShippingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'id'       => ['required', 'integer', 'exists:shipping_requests,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'      => 'الطلب مطلوبة.',
            'id.integer'      => 'الطلب يجب ان يكون رقم صحيح.',
            'id.exists'      => 'الطلب غير موجود.',
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
