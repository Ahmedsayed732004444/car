<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdsBanner extends Model
{
    protected $fillable = ['ads_image', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
