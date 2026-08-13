<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestBrandScope extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'request_id',
        'brand_type',
        'brand_ids_scope',
    ];

    protected $casts = [
        'brand_type' => 'string',
        'brand_ids_scope' => 'array',
    ];
}
