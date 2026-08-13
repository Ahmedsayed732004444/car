<?php

namespace App\Http\Requests\Shared\Complaints;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class CreateComplaintVendorServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'requestId'       => ['required', 'integer', 'exists:request_customers,id'],
            'responseId'       => ['required', 'integer'],
            'description'       => ['required', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'requestId.required'   => 'يجب إدخال رقم الطلب.',
            'requestId.integer'    => 'رقم الطلب يجب أن يكون رقمًا صحيحًا.',
            'requestId.exists'     => 'رقم الطلب غير موجود في قاعدة البيانات.',

            'responseId.required'   => 'يجب إدخال رقم الرد.',
            'responseId.integer'    => 'رقم الرد يجب أن يكون رقمًا صحيحًا.',

            'description.required' => 'يجب إدخال وصف البلاغ.',
            'description.string'   => 'الوصف يجب أن يكون نصًا.',
            'description.max'      => 'الوصف لا يجب أن يتجاوز 2000 حرف.',
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
