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
        Schema::create('custom_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('label_ar', 150);
            $table->string('label_en', 150);
            $table->string('field_name', 100);
            $table->enum('field_type', ['text', 'text_area', 'number', 'select', 'checkbox', 'radio', 'date', 'file']);
            $table->boolean('is_required')->default(true);
            $table->json('options')->nullable();
            $table->integer('min_length')->nullable();
            $table->integer('max_length')->nullable();
            // $table->unique(['category_id', 'field_name'], 'custom_fields_category_field_unique');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_fields');
    }
};
