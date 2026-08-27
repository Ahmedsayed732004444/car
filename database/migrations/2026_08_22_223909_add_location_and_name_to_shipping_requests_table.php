<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shipping_requests', function (Blueprint $table) {
            $table->string('name_origin_vendor')->nullable()->after('order_number');
            $table->double('lat_origin_vendor')->nullable()->after('address_origin_vendor');
            $table->double('lng_origin_vendor')->nullable()->after('lat_origin_vendor');
        });
    }

    public function down(): void
    {
        Schema::table('shipping_requests', function (Blueprint $table) {
            $table->dropColumn(['name_origin_vendor', 'lat_origin_vendor', 'lng_origin_vendor']);
        });
    }
};

