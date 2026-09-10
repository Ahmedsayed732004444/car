<?php

namespace App\Http\Requests\Shared\Devices;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class RegisterDeviceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'fcmToken' => 'required|string|max:255',
            'platform' => 'required|string|in:android,ios,web',
            'deviceId' => 'nullable|string|max:191',
            'deviceModel' => 'nullable|string|max:100',
            'osVersion' => 'nullable|string|max:40',
            'appVersion' => 'nullable|string|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'fcmToken.required' => 'رمز الجهاز مطلوب.',
            'fcmToken.max' => 'رمز الجهاز غير صالح.',
            'platform.required' => 'نوع المنصة مطلوب.',
            'platform.in' => 'نوع المنصة غير صحيح.',
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
