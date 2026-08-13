<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $seeders = [
            PermissionSeeder::class,
            AdminSeeder::class,
            CacheStaticDataVersionSeeder::class,
            CitySeeder::class,
            BrandCarSeeder::class,
            CategorySeeder::class,
            CategoryHasBrandFieldSeeder::class,
        ];

        if (app()->environment(['local', 'testing'])) {
            $seeders[] = TestSeeder::class;
        }

        $this->call($seeders);
    }
}
