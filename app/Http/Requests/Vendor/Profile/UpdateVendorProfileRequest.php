<?php

namespace App\Http\Requests\Vendor\Profile;

use App\Rules\SaudiPhoneNumberRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateVendorProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'companyNameAr' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'phoneContact' => ['nullable', new SaudiPhoneNumberRule],
            'commercialRecord' => ['required', 'string', 'max:20'],
            'isHidePhoneContact' => ['required', 'boolean'],
            'dateExpireCommercialRecord' => ['required', 'date'],
            'images' => 'nullable|array|max:20',
            'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:5000',
        ];
    }

    public function messages(): array
    {
        return [
            'images.*.max' => 'الصورة يجب ان تكون اقل من 5 ميغابايت.',
            'images.*.mimes' => 'الصورة يجب ان تكون png,jpg,jpeg,webp.',
            'images.*.image' => 'الصورة يجب ان تكون صورة.',
            'images.max' => 'الصورة يجب ان تكون اقل من 20 صور.',
            'images.array' => 'الصورة يجب ان تكون مصفوفة.',
            'companyNameAr.required' => 'اسم الشركة مطلوب.',
            'companyNameAr.max' => 'اسم الشركة يجب ان يكون اقل من 255 حرف.',
            'description.max' => 'الوصف يجب ان يكون اقل من 1000 حرف.',
            'commercialRecord.required' => 'رقم السجل التجاري مطلوب.',
            'commercialRecord.max' => 'رقم السجل التجاري يجب ان يكون اقل من 20 حرف.',
            'dateExpireCommercialRecord.required' => 'تاريخ انتهاء السجل التجاري مطلوب.',
            'dateExpireCommercialRecord.date' => 'تاريخ انتهاء السجل التجاري يجب ان يكون تاريخ صحيح.',
            'isHidePhoneContact.required' => 'حقل مطلوب.',
            'isHidePhoneContact.boolean' => 'حقل يجب ان يكون صحيح.',
            'isHidePhoneContact' => 'حقل يجب ان يكون صحيح.',
            'phoneContact.required' => 'رقم الهاتف مطلوب.',
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
