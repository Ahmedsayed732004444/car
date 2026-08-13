<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorSpecialty extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'vendor_id',
        'category_id',
        'is_receive_all_brand_cars',
    ];

    protected $casts = [
        'is_receive_all_brand_cars' => 'boolean',
    ];

    public function scopeJoinCategoryHasBrandFields($query)
    {
        return $query->join('category_has_brand_fields', 'category_has_brand_fields.category_id', '=', 'vendor_specialties.category_id');
    }
}
