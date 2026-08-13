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
        Schema::create('request_customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('customer_city_id');
            $table->decimal('customer_latitude', 15, 10)->nullable();
            $table->decimal('customer_longitude', 15, 10)->nullable();
            $table->string('description', 4000);
            $table->json('cities_ids_scope')->nullable();
            $table->enum('status', ['open', 'closed', 'canceled', 'completed'])->default('open');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_customers');
    }
};
