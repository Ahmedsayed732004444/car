<?php

namespace App\Enums;

enum RequestCustomerStatusEnum: string
{
    case Open = 'open';
    case Closed = 'closed';
    case Canceled = 'canceled';
    case Completed = 'completed';

    public static function trans($value)
    {
        return match ($value) {
            self::Open->value => 'مفتوح',
            self::Closed->value => 'مغلق',
            self::Canceled->value => 'ملغي',
            self::Completed->value => 'مكتمل',
            default => '',
        };
    }
}
