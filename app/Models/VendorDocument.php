<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorDocument extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'vendor_id',
        'document_type',
        'file_path',
    ];

    protected $casts = [
        'document_type' => 'string',
    ];
}
