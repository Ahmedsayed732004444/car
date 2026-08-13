<?php

namespace App\Enums;

enum ComplaintUserTypeEnum: string
{
    case User = 'user';
    case Vendor = 'vendor';
    case Admin = 'admin';
}
