<?php

namespace App\Jobs;

use App\Enums\Notifications\NotificationCategoryEnum;
use App\Http\Services\Shared\Notifications\NotificationBadgeBroadcaster;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Fans a single notification out to many recipients (e.g. every vendor
 * eligible for a new customer request) as one queue insert from the web
 * request, instead of the N blocking FCM HTTP calls the old code made
 * in-request. See NotificationsTrait::notifyRequestToEligibleVendors.
 */
class FanOutPushNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $backoff = [10, 60];
    public $timeout = 120;

    /**
     * @param int[] $userIds
     * @param array $payloadTemplate PushPayload::toArray() with a placeholder recipient_id.
     */
    public function __construct(
        public array $userIds,
        public array $payloadTemplate,
    ) {
        // See SendPushNotificationJob's constructor for why this is set at
        // runtime rather than declared as a class property.
        $this->afterCommit = true;
        $this->onQueue(config('services.fcm.queue', 'notifications'));
    }

    public function handle(NotificationBadgeBroadcaster $badgeBroadcaster): void
    {
        $category = NotificationCategoryEnum::from($this->payloadTemplate['category']);

        foreach (array_chunk(array_values(array_unique($this->userIds)), 200) as $chunk) {
            foreach ($chunk as $userId) {
                $payload = $this->payloadTemplate;
                $payload['recipient_id'] = (int) $userId;

                SendPushNotificationJob::dispatch($payload);
                $badgeBroadcaster->broadcast((int) $userId, $category);
            }
        }
    }
}
