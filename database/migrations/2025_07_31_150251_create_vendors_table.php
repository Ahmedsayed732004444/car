<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('company_name_ar');
            $table->string('company_name_en')->nullable();
            $table->string('description', 1000)->nullable();
            $table->string('commercial_record', 20)->unique();
            $table->date('date_expire_commercial_record');
            $table->string('phone_contact', 20)->nullable();
            $table->float('rating')->default(0);
            $table->boolean('is_hide_phone_contact')->default(false);
            $table->boolean('is_verified')->default(false);
            $table->string('verification_notes', 500)->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
