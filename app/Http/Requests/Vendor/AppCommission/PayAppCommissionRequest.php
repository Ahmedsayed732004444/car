<?php

namespace App\Http\Requests\Vendor\AppCommission;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class PayAppCommissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'amount' => ['required', 'numeric'],
            'date' => ['required', 'date'],
            'nameTransfer' => ['required', 'string', 'max:255'],
            'numberRequest' => ['required', 'integer'],
            'notes' => ['nullable', 'string', 'max:500'],
            'images' => 'required|array|max:20',
            'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:10000',
        ];
    }

    public function messages(): array
    {
        return [
            'amount.required' => 'المبلغ مطلوب.',
            'amount.numeric' => 'المبلغ يجب أن يكون رقمًا.',
            'date.required' => 'تاريخ التحويل مطلوب.',
            'date.date' => 'تاريخ التحويل يجب أن يكون تاريخًا صالحًا.',
            'nameTransfer.required' => 'اسم المحول مطلوب.',
            'nameTransfer.string' => 'اسم المحول يجب أن يكون نصًا.',
            'nameTransfer.max' => 'اسم المحول يجب أن يكون أقل من 255 حرفًا.',
            'numberRequest.required' => 'رقم الطلب مطلوب.',
            'numberRequest.integer' => 'رقم الطلب يجب أن يكون رقمًا صحيحًا.',
            'notes.string' => 'الملاحظات يجب أن تكون نصًا.',
            'notes.max' => 'الملاحظات يجب أن تكون أقل من 500 حرف.',
            'images.required' => 'الصور مطلوبة.',
            'images.array' => 'الصور يجب أن تكون مصفوفة.',
            'images.max' => 'يجب أن تحتوي الصور على 20 عنصر كحد أقصى.',
            'images.*.image' => 'كل صورة يجب أن تكون صورة.',
            'images.*.mimes' => 'الصور يجب أن تكون من نوع: png، jpg، jpeg، webp.',
            'images.*.max' => 'الصور يجب أن تكون أقل من 10 ميجا بايت.',
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
