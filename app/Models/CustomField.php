<?php

namespace App\Models;

use App\Utils\CacheUtils;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomField extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'label_ar',
        'label_en',
        'field_name',
        'field_type',
        'is_required',
        'options',
        'min_length',
        'max_length',
    ];

    protected $casts = [
        'is_required' => 'boolean',
        'options' => 'array',
        'min_length' => 'integer',
        'max_length' => 'integer',
        'field_type' => 'string',
    ];

    public static function getCustomFieldsCached()
    {
        return CacheUtils::rememberForever(CacheUtils::customFieldsCacheStaticDataAppKey(), function () {
            return self::get(['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length']);
        });
    }

    public function scopeJoinCategory($query)
    {
        return $query->join('categories', 'categories.id', '=', 'custom_fields.category_id');
    }
}
