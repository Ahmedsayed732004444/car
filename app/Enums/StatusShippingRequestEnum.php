<?php

namespace App\Enums;


enum StatusShippingRequestEnum: string
{
    case Pending = 'Pending';
    case InProgress = 'InProgress';
    case Completed = 'Completed';

    public static function trans($value)
    {
        return match ($value) {
            self::Pending->value => 'قيد الانتظار',
            self::InProgress->value => 'قيد التنفيذ',
            self::Completed->value => 'مكتمل',
            default => $value,
        };
    }
}
