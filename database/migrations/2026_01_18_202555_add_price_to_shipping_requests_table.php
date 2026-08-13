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
        Schema::table('shipping_requests', function (Blueprint $table) {
            $table->double('fee_cheapest_shipping')->default(0);
            $table->double('amount_rate_app')->default(0);
            $table->boolean('is_user_confirmed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipping_requests', function (Blueprint $table) {
            $table->dropColumn('fee_cheapest_shipping');
            $table->dropColumn('amount_rate_app');
            $table->dropColumn('is_user_confirmed');
        });
    }
};
