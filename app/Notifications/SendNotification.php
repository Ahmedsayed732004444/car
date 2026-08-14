<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SendNotification extends Notification
{
    use Queueable;

    protected $title;
    protected $body;
    protected $category;
    protected $targetId;

    public function __construct($title, $body, $category = 'customer_requests', $targetId = null)
    {
        $this->title = $title;
        $this->body = $body;
        $this->category = $category;
        $this->targetId = $targetId;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category,
            'target_id' => $this->targetId,
        ];
    }
}
