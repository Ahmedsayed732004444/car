<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorReview extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'request_id',
        'vendor_id',
        'user_id',
        'rating',
        'review',
        'is_visible',
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'is_visible' => 'boolean',
    ];
}
