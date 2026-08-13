<?php

namespace App\Events;

use App\Models\MessageConversation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewMessage implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;


    public $message;
    public $conversationId;

    public function __construct($conversationId, $message)
    {
        $this->conversationId = $conversationId;
        $this->message = $message;
    }

    public function broadcastOn(): array
    {
        return [new PrivateChannel("private-conversation.{$this->conversationId}")];
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
            'body' => $this->message->body ?? $this->message,
            'created_at' => $this->message->created_at?->toDateTimeString(),
        ];
    }
}
