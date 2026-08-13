<?php

namespace App\Http\Requests\Vendor\RegisterVendor;

use App\Rules\SaudiPhoneNumberRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class CreateRegisterVendorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'categoriesIds' => json_decode($this->categoriesIds),
        ]);
    }

    public function rules(): array
    {
        return [
            'companyNameAr' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', new SaudiPhoneNumberRule, 'unique:users,phone'],
            'commercialRecord' => ['required', 'string', 'max:20'],
            'dateExpireCommercialRecord' => ['required', 'date'],
            'categoriesIds' => ['required', 'array', 'min:1'],
            'categoriesIds.*' => ['required', 'integer', 'exists:categories,id'],
            'cityId' => ['required', 'integer'],
            'images' => 'required|array|max:20',
            'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:5000',
        ];
    }

    public function messages(): array
    {
        return [
            'companyNameAr.required' => 'اسم الشركة مطلوب.',
            'companyNameAr.max' => 'اسم الشركة يجب ان يكون اقل من 255 حرف.',
            'phoneNumber.required' => 'رقم الجوال مطلوب.',
            'commercialRecord.required' => 'رقم السجل التجاري مطلوب.',
            'commercialRecord.max' => 'رقم السجل التجاري يجب ان يكون اقل من 20 حرف.',
            'dateExpireCommercialRecord.required' => 'تاريخ انتهاء السجل التجاري مطلوب.',
            'categoriesIds.required' => 'يجب تحديد الأقسام المطلوبة.',
            'categoriesIds.array' => 'يجب أن تكون قائمة الأقسام في شكل مصفوفة.',
            'categoriesIds.min' => 'يجب اختيار قسم واحد على الأقل.',
            'categoriesIds.*.required' => 'كل قسم في القائمة مطلوب.',
            'categoriesIds.*.integer' => 'يجب أن يكون معرف القسم رقمًا صحيحًا.',
            'categoriesIds.*.exists' => 'أحد الأقسام المحددة غير موجود في قاعدة البيانات.',
            'cityId.required' => 'المدينة مطلوبة.',
            'images.required' => 'الصور مطلوبة.',
            'images.max' => 'الصور يجب ان يكون اقل من 20 صور.',
            'images.*.max' => 'الصور يجب ان يكون اقل من 5 ميجا.',
            'images.*.mimes' => 'الصور يجب ان يكون png,jpg,jpeg,webp.',
            'images.*.required' => 'الصور مطلوبة.',
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
