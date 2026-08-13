<?php

namespace Database\Seeders;

use App\Enums\CustomFieldTypeEnum;
use App\Models\AdsBanner;
use App\Models\CustomField;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorCity;
use App\Models\VendorSpecialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomField::updateOrCreate(
            ['category_id' => 2, 'field_name' => 'spare_parts_field'],
            ['label_ar' => 'إسم القطعة', 'label_en' => 'Part Name', 'field_type' => CustomFieldTypeEnum::Text->value, 'is_required' => true,],
        );
        CustomField::updateOrCreate(
            ['category_id' => 2, 'field_name' => 'image_spare_parts'],
            ['label_ar' => 'صورة استمارة السيارة', 'label_en' => 'image of spare parts', 'field_type' => CustomFieldTypeEnum::File->value, 'is_required' => true,],
        );

        AdsBanner::updateOrCreate(
            ['ads_image' => 'listining_image1.jpeg', 'is_active' => true],
        );
        AdsBanner::updateOrCreate(
            ['ads_image' => 'listining_image2.jpeg', 'is_active' => true],
        );

        // create companies
        // create users
        // $company = User::create([
        //     'name' => 'شركة الحمزي للسيارات',
        //     'phone' => '0555555555',
        //     'status' => 'Active',
        // ]);

        // Vendor::create([
        //     'user_id' => $company->id,
        //     'company_name_ar' => 'شركة الحمزي للسيارات',
        //     'company_name_en' => 'Hamzy Auto',
        //     'description' => 'شركة الحمزي للسيارات',
        //     'commercial_record' => '123456789',
        //     'national_id' => '123456789',
        //     'phone_contact' => '0555555555',
        //     'is_hide_phone_contact' => true,
        // ]);

        // VendorCity::create([
        //     'vendor_id' => $company->id,
        //     'city_id' => 1,
        // ]);
        // VendorCity::create([
        //     'vendor_id' => $company->id,
        //     'city_id' => 2,
        // ]);
        // VendorCity::create([
        //     'vendor_id' => $company->id,
        //     'city_id' => 3,
        // ]);

        // VendorSpecialty::create([
        //     'vendor_id' => $company->id,
        //     'category_id' => 1,
        // ]);
        // VendorSpecialty::create([
        //     'vendor_id' => $company->id,
        //     'category_id' => 2,
        // ]);
        // VendorSpecialty::create([
        //     'vendor_id' => $company->id,
        //     'category_id' => 3,
        // ]);
    }
}
