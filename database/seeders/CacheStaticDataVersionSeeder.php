<?php

namespace Database\Seeders;

use App\Enums\EntityNameCacheStaticDataEnum;
use App\Models\CacheStaticDataVersion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CacheStaticDataVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (EntityNameCacheStaticDataEnum::cases() as $case) {
            CacheStaticDataVersion::updateOrCreate(
                ['entity_name' => $case->value],
            );
        }
    }
}
