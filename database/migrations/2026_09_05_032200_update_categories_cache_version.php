<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Enums\EntityNameCacheStaticDataEnum;
use Illuminate\Support\Facades\Cache;
use App\Utils\CacheUtils;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('cache_static_data_versions')
            ->updateOrInsert(
                ['entity_name' => 'Categories'],
                ['updated_at' => now()]
            );
            
        Cache::forget('categories_cache_static_data_app');
    }

    public function down(): void
    {
    }
};
