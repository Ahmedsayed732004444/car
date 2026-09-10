<?php

namespace App\Notifications;

use App\Enums\Notifications\NotificationCategoryEnum;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SendNotification extends Notification
{
    use Queueable;

    public function __construct(
        protected string $title,
        protected string $body,
        protected NotificationCategoryEnum $category = NotificationCategoryEnum::Generic,
        protected ?string $targetId = null,
    ) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category->value,
            'target_id' => $this->targetId,
            'badge_category' => $this->category->badgeBucket(),
        ];
    }
}
