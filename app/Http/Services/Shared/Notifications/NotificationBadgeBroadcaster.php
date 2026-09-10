<?php

namespace App\Http\Services\Shared\Notifications;

use App\Enums\Notifications\NotificationCategoryEnum;
use App\Events\NotificationBadgeUpdated;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Broadcasting must never break the request/job that triggered a
 * notification, so every call is wrapped — Reverb being unreachable is
 * logged, not thrown.
 */
class NotificationBadgeBroadcaster
{
    public function __construct(protected NotificationCountsService $counts) {}

    public function broadcast(int $userId, NotificationCategoryEnum $category): void
    {
        $bucket = $category->badgeBucket();
        if ($bucket === null) {
            return;
        }

        try {
            NotificationBadgeUpdated::dispatch($userId, $bucket, $this->counts->unreadCountsForUser($userId));
        } catch (Throwable $e) {
            Log::error('Broadcast failed for NotificationBadgeUpdated: ' . $e->getMessage(), [
                'notifiable_id' => $userId,
            ]);
        }
    }
}
