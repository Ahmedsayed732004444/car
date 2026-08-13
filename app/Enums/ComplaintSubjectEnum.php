<?php

namespace App\Enums;

enum ComplaintSubjectEnum: string
{
    case Transaction = 'transaction';
    case VendorService = 'vendor_service';
    case ProductQuality = 'product_quality';
    case Delivery = 'delivery';
    case Payment = 'payment';
    case Technical = 'technical';
    case Fraud = 'fraud';
    case Other = 'other';

    public static function trans($value)
    {
        return match ($value) {
            self::Transaction->value => 'مشكلة في معاملة',
            self::VendorService->value => 'سوء خدمة بائع',
            self::ProductQuality->value => 'جودة المنتج',
            self::Delivery->value => 'مشكلة توصيل',
            self::Payment->value => 'مشكلة دفع',
            self::Technical->value => 'مشكلة فنية',
            self::Fraud->value => 'احتيال',
            self::Other->value => 'اخرى',
            default => '',
        };
    }
}
