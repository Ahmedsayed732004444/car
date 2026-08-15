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
        $conversation = $query->where('id', $conversationId)->first(['id', 'vendor_id', 'user_id']);
        if (!$conversation) return 0;

        $vendorUserId = Vendor::where('id', $conversation->vendor_id)->value('user_id') ?: $conversation->vendor_id;

        if ($currentUserId == $vendorUserId || $currentUserId == $conversation->vendor_id) {
            return $conversation->user_id;
        } else {
            return $vendorUserId;
        }
    }
}
