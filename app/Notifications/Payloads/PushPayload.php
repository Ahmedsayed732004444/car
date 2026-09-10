<?php

namespace App\Notifications\Payloads;

use App\Enums\Notifications\NotificationCategoryEnum;

/**
 * The single canonical shape for a push notification, from the moment it's
 * dispatched to a queue job through to the FCM `data` payload the app reads
 * on tap. See NotificationDispatcherService for the only place these get built.
 */
final class PushPayload
{
    public function __construct(
        public readonly int $recipientId,
        public readonly NotificationCategoryEnum $category,
        public readonly string $title,
        public readonly string $body,
        public readonly ?string $targetId = null,
        public readonly array $params = [],
        public readonly ?string $notificationId = null,
    ) {}

    /**
     * Scalar-only shape safe to pass as a queued job constructor argument.
     */
    public function toArray(): array
    {
        return [
            'recipient_id' => $this->recipientId,
            'category' => $this->category->value,
            'title' => $this->title,
            'body' => $this->body,
            'target_id' => $this->targetId,
            'params' => $this->params,
            'notification_id' => $this->notificationId,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            recipientId: (int) $data['recipient_id'],
            category: NotificationCategoryEnum::from($data['category']),
            title: (string) $data['title'],
            body: (string) $data['body'],
            targetId: $data['target_id'] ?? null,
            params: $data['params'] ?? [],
            notificationId: $data['notification_id'] ?? null,
        );
    }

    /**
     * FCM's `data` payload is a map<string,string> — every value here must be
     * a string. Emits both the new contract (`route`, `category_v2`) and the
     * legacy keys installed clients still read (`category`, `click_action`,
     * `screen`, `status`, `type_notification`, and the flattened params) for
     * one release window. See the notification upgrade plan, Phase 6, for
     * when the legacy keys are dropped.
     */
    public function toDataArray(): array
    {
        $data = [
            'v' => '1',
            'route' => $this->category->route(),
            'category_v2' => $this->category->value,
            'target_id' => (string) ($this->targetId ?? ''),
            'recipient_id' => (string) $this->recipientId,
            'notification_id' => (string) ($this->notificationId ?? ''),
            'title' => $this->title,
            'body' => $this->body,
            'sent_at' => (string) now()->timestamp,
            'params' => json_encode($this->params, JSON_UNESCAPED_UNICODE) ?: '{}',
            // Legacy keys — removed once installed-client adoption is high enough.
            'category' => $this->category->legacyCategory(),
            'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
            'status' => 'done',
            'type_notification' => 'all',
            'screen' => 'NotificationsScreen',
        ];

        foreach ($this->params as $key => $value) {
            $data[$key] = (string) $value;
        }

        return array_map(static fn ($v) => (string) $v, $data);
    }
}
