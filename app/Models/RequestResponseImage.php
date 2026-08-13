<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestResponseImage extends Model
{
    protected $fillable = [
        'response_id',
        'image_name',
    ];
}
