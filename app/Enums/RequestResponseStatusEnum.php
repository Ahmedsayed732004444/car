<?php

namespace App\Enums;

enum RequestResponseStatusEnum: string
{
    case Available = 'available';
    case AvailableWithDifference = 'available_with_difference';
    case Unavailable = 'unavailable';
}
