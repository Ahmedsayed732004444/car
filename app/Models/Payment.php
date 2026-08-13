<?php

namespace App\Models;

use App\Enums\PaymentStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'date',
        'name_transfer',
        'number_request',
        'notes',
        'invoice_image',
        'status',
    ];

    // cast
    protected $casts = [
        'amount' => 'double',
        'date' => 'date',
        'status' => PaymentStatusEnum::class
    ];
}
