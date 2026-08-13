<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cat_name_ar',
        'cat_name_en',
        'cat_icon_path',
        'commission_type',
        'commission',
        'active',
    ];

    protected $casts = [
        'commission' => 'decimal:2',
    ];
}
