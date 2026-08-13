<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class SaudiPhoneNumberRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match('/^(?:05\d{8}|\+9665\d{8})$/', $value)) {
            $fail('رقم الهاتف يجب أن يكون رقم صحيح يبدأ بـ 05 أو +9665.');
        }
    }
}
