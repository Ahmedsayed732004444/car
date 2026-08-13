<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent  implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;



    public $message;
    public $fromUserId;
    public $toUserId;

    public function __construct($fromUserId, $toUserId, $message)
    {
        $this->fromUserId = $fromUserId;
        $this->toUserId = $toUserId;
        $this->message = $message;
    }

    // Broadcast on a private channel unique to the conversation
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel("private-chat.{$this->fromUserId}.{$this->toUserId}")
        ];
    }

    public function broadcastAs()
    {
        return 'message.sent';
    }

    public function broadcastWith()
    {
        return [
            'from' => $this->fromUserId,
            'to' => $this->toUserId,
            'message' => $this->message,
        ];
    }
}
