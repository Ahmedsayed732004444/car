<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Nothing today stops two accounts from sharing one fcm_token (a reinstall
     * or account switch on the same phone never cleared the previous owner's
     * row), but user_devices.token is unique. So: keep only the most recently
     * updated owner per token, streamed via cursor() so this is memory-bounded
     * regardless of table size.
     */
    public function up(): void
    {
        $seenTokens = [];
        $rows = [];

        DB::table('users')
            ->whereNotNull('fcm_token')
            ->where('fcm_token', '!=', '')
            ->orderByDesc('updated_at')
            ->select('id', 'fcm_token', 'updated_at')
            ->cursor()
            ->each(function ($user) use (&$seenTokens, &$rows) {
                if (isset($seenTokens[$user->fcm_token])) {
                    return;
                }
                $seenTokens[$user->fcm_token] = true;

                $rows[] = [
                    'user_id' => $user->id,
                    'token' => $user->fcm_token,
                    'platform' => 'android',
                    'app_version' => 'legacy',
                    'last_used_at' => $user->updated_at,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                if (count($rows) >= 500) {
                    DB::table('user_devices')->insertOrIgnore($rows);
                    $rows = [];
                }
            });

        if (!empty($rows)) {
            DB::table('user_devices')->insertOrIgnore($rows);
        }
    }

    public function down(): void
    {
        DB::table('user_devices')->where('app_version', 'legacy')->delete();
    }
};
