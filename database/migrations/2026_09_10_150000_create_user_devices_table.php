<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_devices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('token', 255);
            $table->string('device_id', 191)->nullable();
            $table->string('platform', 10)->default('android');
            $table->string('device_model', 100)->nullable();
            $table->string('os_version', 40)->nullable();
            $table->string('app_version', 20)->nullable();
            $table->unsignedTinyInteger('failure_count')->default(0);
            $table->string('revoked_reason', 40)->nullable();
            $table->timestamp('revoked_at')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();

            // A token maps to exactly one row, and therefore one user — this is
            // the "reaches the correct user" guarantee. Re-registering an
            // existing token under a different account reassigns it.
            $table->unique('token');
            $table->index(['user_id', 'revoked_at']);
            $table->index(['user_id', 'device_id']);
            $table->index('app_version');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_devices');
    }
};
