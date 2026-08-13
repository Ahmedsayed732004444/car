<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DecimalFormatRule implements ValidationRule
{
    protected int $totalDigits;
    protected int $decimalPlaces;

    public function __construct(int $totalDigits = 10, int $decimalPlaces = 2)
    {
        $this->totalDigits = $totalDigits;
        $this->decimalPlaces = $decimalPlaces;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_numeric($value)) {
            $fail("حقل {$attribute} يجب أن يكون رقمياً.");
            return;
        }

        // تحويل القيمة لنص للتأكد من الطول
        $parts = explode('.', (string)$value);

        $integerPart = $parts[0] ?? '';
        $decimalPart = $parts[1] ?? '';

        // تحقق من طول الجزء الصحيح والعشري
        if (strlen($integerPart) > ($this->totalDigits - $this->decimalPlaces)) {
            $attributeTrans = __('validation.attributes.' . $attribute);
            $fail("حقل {$attributeTrans} يجب ألا يتجاوز " . ($this->totalDigits - $this->decimalPlaces) . " أرقام قبل الفاصلة.");
        }

        if (strlen($decimalPart) > $this->decimalPlaces) {
            $attributeTrans = __('validation.attributes.' . $attribute);
            $fail("حقل {$attributeTrans} يجب ألا يتجاوز {$this->decimalPlaces} أرقام بعد الفاصلة.");
        }
    }
}
