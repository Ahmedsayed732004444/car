<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotificationBadgeUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userId;
    public $category;
    public $unreadCounts;

    public function __construct($userId, $category, array $unreadCounts)
    {
        $this->userId = $userId;
        $this->category = $category;
        $this->unreadCounts = $unreadCounts;
    }

    public function broadcastOn(): array
    {
        return [new PrivateChannel("user.{$this->userId}")];
    }

    public function broadcastAs()
    {
        return 'notification.badge.updated';
    }

    public function broadcastWith(): array
    {
        return [
            'user_id' => $this->userId,
            'category' => $this->category,
            'unread_counts' => $this->unreadCounts,
        ];
    }
}
