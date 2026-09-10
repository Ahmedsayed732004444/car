<?php

namespace App\Services\Fcm;

use App\Notifications\Payloads\PushPayload;

class FcmMessageBuilder
{
    public static function build(PushPayload $payload): array
    {
        $message = ['data' => $payload->toDataArray()];

        $message['android'] = [
            'priority' => 'high',
            'ttl' => ((int) config('services.fcm.ttl', 3600)) . 's',
            // `tag` collapses repeat notifications for the same thread (e.g. a
            // conversation) into one tray entry instead of stacking one per message.
            'notification' => [
                'tag' => $payload->category->value . ':' . ($payload->targetId ?? '0'),
                'channel_id' => 'high_importance_channel',
            ],
        ];

        // Hybrid by default: the top-level `notification` block guarantees tray
        // display in background/terminated with no isolate work, and is what
        // installed (pre-overhaul) clients require. See services.fcm.android_data_only.
        if (!config('services.fcm.android_data_only', false)) {
            $message['notification'] = [
                'title' => $payload->title,
                'body' => $payload->body,
            ];
        }

        $message['apns'] = [
            'headers' => [
                'apns-priority' => '10',
                'apns-push-type' => 'alert',
            ],
            'payload' => [
                'aps' => [
                    'alert' => ['title' => $payload->title, 'body' => $payload->body],
                    'sound' => 'default',
                    'mutable-content' => 1,
                    'thread-id' => $payload->category->value,
                ],
            ],
        ];

        return $message;
    }
}
