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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['user', 'vendor', 'admin']);
            $table->unsignedBigInteger('user_id');
            $table->enum('subject', ['transaction', 'vendor_service', 'product_quality', 'delivery', 'payment', 'technical', 'fraud', 'other'])->default('other');
            $table->unsignedBigInteger('request_id')->nullable();
            $table->string('title');
            $table->string('description', 2000);
            $table->enum('status', ['new', 'under_review', 'resolved', 'rejected', 'closed'])->default('new');
            $table->unsignedBigInteger('reviewed_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
