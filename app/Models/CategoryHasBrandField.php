<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryHasBrandField extends Model
{
    protected $fillable = [
        'category_id',
        'has_brand_type',
    ];

    protected $casts = [
        'has_brand_type' => 'string',
    ];
}
