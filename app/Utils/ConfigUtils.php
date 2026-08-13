<?php

namespace App\Utils;

class ConfigUtils
{
    public static function getExpireAtOtpUser()
    {
        return now()->addMinutes(5);
    }

    public static function generateOtpRandomInt(): int
    {
        // return random_int(10000, 99999);
        return 11111;
    }

    public static function getAmountRateAppForCharge()
    {
        return 10;
    }
}
