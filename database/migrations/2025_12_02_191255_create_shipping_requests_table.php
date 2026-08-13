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
        Schema::create('shipping_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('response_id');
            $table->string('order_number')->nullable();
            $table->string('city_origin_vendor', 100)->nullable();
            $table->string('address_origin_vendor')->nullable();
            $table->string('phone_origin_vendor', 20)->nullable();
            $table->double('length')->nullable();
            $table->double('width')->nullable();
            $table->double('height')->nullable();
            $table->double('weight')->nullable();
            $table->string('id_number_user', 20)->nullable();
            $table->string('city_origin_dimensions', 100)->nullable();
            $table->string('address_origin_dimensions')->nullable();
            $table->string('phone_origin_dimensions', 20)->nullable();
            $table->string('status', 100)->default('Pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_requests');
    }
};
