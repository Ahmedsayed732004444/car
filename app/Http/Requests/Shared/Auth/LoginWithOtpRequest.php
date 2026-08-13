<?php

namespace App\Http\Requests\Shared\Auth;

use App\Rules\SaudiPhoneNumberRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class LoginWithOtpRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'phoneNumber' => ['required', new SaudiPhoneNumberRule, 'exists:users,phone'],
            'otp' => 'required',
            'fcmToken' => 'nullable|string|max:255',
            'apiKey' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'phoneNumber.required' => 'رقم الجوال مطلوب.',
            'phoneNumber.exists'   => 'رقم الجوال غير مسجل لدينا.',
            'otp.required'         => 'رمز التحقق مطلوب.',
            'fcmToken.string'      => 'رمز FCM يجب أن يكون نصاً.',
            'fcmToken.max'         => 'رمز FCM يجب ألا يتجاوز 255 حرفاً.',
            'apiKey.string'        => 'مفتاح API يجب أن يكون نصاً.',
            'apiKey.max'           => 'مفتاح API يجب ألا يتجاوز 255 حرفاً.',
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
