<?php

namespace Database\Seeders;

use App\Enums\CommissionTypeEnum;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesList = [
            ['cat_name_ar' => 'سيارات مستعملة', 'cat_name_en' => 'Used Cars', 'cat_icon_path' => 'new-cars-icon.png', 'commission_type' => CommissionTypeEnum::Amount->value, 'commission' => 300],
            ['cat_name_ar' => 'قطع غيار تشليح', 'cat_name_en' => 'Scrap Spare Parts', 'cat_icon_path' => 'spare-parts-icon.png', 'commission_type' => CommissionTypeEnum::Rate->value, 'commission' => 0.01],
            ['cat_name_ar' => 'قطع غيار جديدة', 'cat_name_en' => 'New Spare Parts', 'cat_icon_path' => 'new-pease.png', 'commission_type' => CommissionTypeEnum::Rate->value, 'commission' => 0.01],
            ['cat_name_ar' => 'سطحة', 'cat_name_en' => 'Tow Truck', 'cat_icon_path' => 'tow-truck-icon.png', 'commission_type' => CommissionTypeEnum::Amount->value, 'commission' => 300],
            ['cat_name_ar' => 'معدات ثقيلة', 'cat_name_en' => 'Heavy Equipment', 'cat_icon_path' => 'heavy_equipment-icon.png', 'commission_type' => CommissionTypeEnum::Amount->value, 'commission' => 300],
            ['cat_name_ar' => 'إكسسوارات سيارات', 'cat_name_en' => 'Car Accessories', 'cat_icon_path' => 'car-accessories-icon.png', 'commission_type' => CommissionTypeEnum::Rate->value, 'commission' => 0.01],
        ];

        foreach ($categoriesList as $category) {
            Category::updateOrCreate(
                ['cat_name_ar' => $category['cat_name_ar'], 'cat_name_en' => $category['cat_name_en']],
                ['cat_icon_path' => $category['cat_icon_path'], 'commission_type' => $category['commission_type'], 'commission' => $category['commission'],]
            );
        }
    }
}
