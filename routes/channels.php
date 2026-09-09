<?php

use App\Models\Conversation;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('user.{id}', function ($user, $id) {
    \Illuminate\Support\Facades\Log::info("Broadcast auth attempt on user.{$id} by user {$user->id}");
    return (int) $user->id === (int) $id;
});

Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
    $conv = Conversation::find($conversationId);
    if (!$conv) {
        \Illuminate\Support\Facades\Log::warning("Broadcast auth failed: Conversation {$conversationId} not found");
        return false;
    }
    
    $vendorUserId = \App\Models\Vendor::where('id', $conv->vendor_id)->value('user_id') ?: $conv->vendor_id;
    
    $allowed = (int) $user->id === (int) $vendorUserId || (int) $user->id === (int) $conv->user_id;
    if (!$allowed) {
        \Illuminate\Support\Facades\Log::warning("Broadcast auth forbidden: User {$user->id} not participant in conversation {$conversationId} (vendor user: {$vendorUserId}, client user: {$conv->user_id})");
    }
    return $allowed;
});

Broadcast::channel('private-conversation.{conversationId}', function ($user, $conversationId) {
    $conv = Conversation::find($conversationId);
    if (!$conv) return false;
    $vendorUserId = \App\Models\Vendor::where('id', $conv->vendor_id)->value('user_id') ?: $conv->vendor_id;
    return (int) $user->id === (int) $vendorUserId || (int) $user->id === (int) $conv->user_id;
});

Broadcast::channel('chat.{id1}.{id2}', function ($user, $id1, $id2) {
    return (int) $user->id === (int) $id1 || (int) $user->id === (int) $id2;
});

Broadcast::channel('private-chat.{id1}.{id2}', function ($user, $id1, $id2) {
    return (int) $user->id === (int) $id1 || (int) $user->id === (int) $id2;
});