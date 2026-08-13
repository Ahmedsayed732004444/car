<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestCustomFieldValue extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'request_id',
        'custom_field_id',
        'value',
    ];
}
