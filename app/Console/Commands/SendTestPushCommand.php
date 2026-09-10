<?php

namespace App\Console\Commands;

use App\Enums\Notifications\NotificationCategoryEnum;
use App\Jobs\SendPushNotificationJob;
use App\Models\User;
use App\Models\UserDevice;
use App\Notifications\Payloads\PushPayload;
use App\Services\Fcm\FcmClient;
use App\Services\Fcm\FcmMessageBuilder;
use Illuminate\Console\Command;

class SendTestPushCommand extends Command
{
    protected $signature = 'push:test {userId} {--category=chat_message} {--target=} {--dry-run} {--sync}';

    protected $description = 'Send a real (or dry-run) push notification to one user, for verifying the delivery pipeline';

    public function handle(): int
    {
        $userId = (int) $this->argument('userId');
        $user = User::find($userId);

        if (!$user) {
            $this->error("No user with id {$userId}");
            return self::FAILURE;
        }

        $category = NotificationCategoryEnum::from((string) $this->option('category'));
        $targetId = $this->option('target');

        $payload = new PushPayload(
            recipientId: $userId,
            category: $category,
            title: 'اختبار الإشعارات',
            body: 'هذا إشعار تجريبي من push:test',
            targetId: $targetId,
        );

        if ($this->option('dry-run')) {
            $tokens = UserDevice::active()->where('user_id', $userId)->pluck('token')->all();

            if (empty($tokens)) {
                $this->warn("User {$userId} has no active devices.");
                return self::SUCCESS;
            }

            $message = FcmMessageBuilder::build($payload);
            foreach ($tokens as $token) {
                $this->line("--- token ...{$this->tail($token)} ---");
                $this->line(json_encode(array_merge($message, ['token' => $token]), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            }
            return self::SUCCESS;
        }

        if ($this->option('sync')) {
            app(FcmClient::class); // resolve early so a missing-credentials error surfaces clearly
            (new SendPushNotificationJob($payload->toArray()))->handle(app(FcmClient::class));
            $this->info("Sent synchronously to user {$userId}.");
            return self::SUCCESS;
        }

        SendPushNotificationJob::dispatch($payload->toArray());
        $this->info("Queued a push to user {$userId} on the '" . config('services.fcm.queue', 'notifications') . "' queue.");

        return self::SUCCESS;
    }

    private function tail(string $token): string
    {
        return substr($token, -8);
    }
}
