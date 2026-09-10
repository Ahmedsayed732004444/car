<?php

namespace App\Http\Repositories\Shared\Devices;

use App\Models\UserDevice;
use Illuminate\Support\Facades\DB;

class UserDeviceRepository
{
    /**
     * Upsert keyed on the unique `token` column. Since a token can belong to
     * exactly one row, re-registering an existing token under a different
     * user reassigns it — this is the guarantee that a resold/reused phone
     * or an account switch can never leave notifications flowing to the
     * previous owner.
     */
    public function registerForUser(int $userId, array $attributes): UserDevice
    {
        return DB::transaction(function () use ($userId, $attributes) {
            $device = UserDevice::updateOrCreate(
                ['token' => $attributes['token']],
                array_merge($attributes, [
                    'user_id' => $userId,
                    'revoked_at' => null,
                    'revoked_reason' => null,
                    'failure_count' => 0,
                    'last_used_at' => now(),
                ])
            );

            // One physical device should have exactly one live token — without
            // this, an FCM token rotation leaves the old row as an orphan that
            // keeps receiving pushes until FCM eventually 404s it.
            if (!empty($attributes['device_id'])) {
                UserDevice::where('device_id', $attributes['device_id'])
                    ->where('token', '!=', $attributes['token'])
                    ->whereNull('revoked_at')
                    ->update(['revoked_at' => now(), 'revoked_reason' => 'token_rotated']);
            }

            return $device;
        });
    }

    public function revokeByToken(string $token, ?string $reason = null): void
    {
        UserDevice::where('token', $token)->update([
            'revoked_at' => now(),
            'revoked_reason' => $reason ?? 'unregistered',
        ]);
    }

    public function activeTokensForUser(int $userId): array
    {
        return UserDevice::active()->where('user_id', $userId)->pluck('token')->all();
    }
}
