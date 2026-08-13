<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class MessageConversation extends Model
{
    protected $fillable = [
        'conversation_id',
        'sender_id',
        'body',
        'image',
        'is_shipping_request',
        'read',
    ];

    // casts
    protected $casts = [
        'is_shipping_request' => 'boolean',
        'read' => 'boolean',
    ];


    //date_sent
    protected function dateSent(): Attribute
    {
        return Attribute::make(
            get: fn($value) =>
            $value
                ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('h:i a')
                : null
        );
    }
}
