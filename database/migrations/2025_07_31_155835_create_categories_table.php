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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name_ar', 100);
            $table->string('cat_name_en', 100);
            $table->string('cat_icon_path');
            $table->enum('commission_type', ['rate', 'amount']);
            $table->decimal('commission', 8, 2)->default(0);
            $table->enum('active', ['Active', 'Inactive', 'Soon'])->default('Active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
