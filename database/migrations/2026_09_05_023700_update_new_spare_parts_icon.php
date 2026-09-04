<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('categories')
            ->where('cat_name_ar', 'LIKE', '%جديدة%')
            ->orWhere('cat_name_ar', 'LIKE', '%جديده%')
            ->update(['cat_icon_path' => 'new-spare-parts-icon.png']);
    }

    public function down(): void
    {
    }
};
