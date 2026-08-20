<?php

namespace Database\Seeders;

use App\Models\CategoryHasBrandField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryHasBrandFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryHasBrandField::updateOrCreate(['category_id' => 1]);
        CategoryHasBrandField::updateOrCreate(['category_id' => 2]);
        CategoryHasBrandField::updateOrCreate(['category_id' => 3]);
    }
}
