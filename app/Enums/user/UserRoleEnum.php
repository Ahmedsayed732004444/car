<?php

namespace App\Enums\user;

enum UserRoleEnum: string
{
    case Super_Admin = 'Super-Admin';
    case Admin = 'admin';
    case Vendor = 'vendor';
    case User = 'user';
}
