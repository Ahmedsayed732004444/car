<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'user_id',
        'vendor_id',
        'request_id',
        'response_id'
    ];

    public function scopeGetReceiverId($query, $conversationId, $currentUserId)
    {
        $result = $query->where('id', $conversationId)->first(['id', 'vendor_id', 'user_id']);

        return (($result->vendor_id ?? 0) == $currentUserId) ? $result->user_id ?? 0 : $result->vendor_id ?? 0;
    }
}
