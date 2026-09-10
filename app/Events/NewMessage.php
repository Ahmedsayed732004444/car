<?php

namespace App\Events;

use App\Models\MessageConversation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewMessage implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $message;
    public $conversationId;

    public function __construct($conversationId, $message)
    {
        $this->conversationId = $conversationId;
        $this->message = $message;
    }

    public function broadcastOn(): array
    {
        return [new PrivateChannel("conversation.{$this->conversationId}")];
    }

    public function broadcastAs()
    {
        return 'message.sent';
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->message->id ?? null,
            'sender_id' => $this->message->sender_id ?? null,
            'body' => $this->message->body ?? null,
            'image' => $this->message->image ?? null,
            'is_shipping_request' => (bool) ($this->message->is_shipping_request ?? false),
            'conversation_id' => (int) $this->conversationId,
            'date_sent' => $this->message->created_at?->format('h:i a') ?? '',
            'created_at' => $this->message->created_at?->toDateTimeString(),
        ];
    }
}
