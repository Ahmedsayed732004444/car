<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->string('category', 40)->nullable()->after('data');
            $table->string('target_id', 40)->nullable()->after('category');
            $table->string('badge_category', 40)->nullable()->after('target_id');
            $table->index('read_at');
            $table->index(['notifiable_type', 'notifiable_id', 'badge_category', 'read_at'], 'notifications_badge_idx');
        });

        // Backfill existing rows from the JSON `data` blob so the new indexed
        // columns (and therefore the badge endpoints) are correct for
        // notifications sent before this migration ran.
        DB::table('notifications')
            ->whereNull('category')
            ->orderBy('id')
            ->select('id', 'data')
            ->chunkById(500, function ($rows) {
                foreach ($rows as $row) {
                    $data = json_decode($row->data, true) ?: [];
                    $legacyCategory = $data['category'] ?? null;
                    $targetId = $data['target_id'] ?? $data['entity_id'] ?? $data['request_id'] ?? null;

                    $badgeCategory = match ($legacyCategory) {
                        'company_responses', 'customer_requests', 'conversations' => $legacyCategory,
                        default => null,
                    };

                    DB::table('notifications')->where('id', $row->id)->update([
                        'category' => $legacyCategory,
                        'target_id' => $targetId !== null ? (string) $targetId : null,
                        'badge_category' => $badgeCategory,
                    ]);
                }
            }, 'id');
    }

    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropIndex('notifications_badge_idx');
            $table->dropIndex(['read_at']);
            $table->dropColumn(['category', 'target_id', 'badge_category']);
        });
    }
};
