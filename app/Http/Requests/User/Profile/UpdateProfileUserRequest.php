<?php

namespace App\Http\Requests\User\Profile;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateProfileUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
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
            'name.required' => 'الإسم مطلوب.',
            'name.max' => 'الإسم يجب ان يكون اقل من 255 حرف.',
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
