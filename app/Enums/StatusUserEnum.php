<?php

namespace App\Enums;

enum StatusUserEnum: string
{
    case Pending = 'Pending';
    case Active = 'Active';
    case Inactive = 'Inactive';
    case Suspended = 'Suspended';
    case Rejected = 'Rejected';
}
