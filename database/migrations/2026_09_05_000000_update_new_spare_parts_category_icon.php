<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('categories')
            ->where('cat_name_en', 'New Spare Parts')
            ->orWhere('cat_name_ar', 'قطع غيار جديدة')
            ->update(['cat_icon_path' => 'spare-parts-new-icon.png']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('categories')
            ->where('cat_name_en', 'New Spare Parts')
            ->orWhere('cat_name_ar', 'قطع غيار جديدة')
            ->update(['cat_icon_path' => 'spare-parts-icon.png']);
    }
};
