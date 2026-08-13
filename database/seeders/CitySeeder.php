<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $citiesList = [
            ['ar' => 'الرياض', 'en' => 'Riyadh'],
            ['ar' => 'مكة', 'en' => 'Makkah'],
            ['ar' => 'جده', 'en' => 'Jeddah'],
            ['ar' => 'المدينة', 'en' => 'Madinah'],
            ['ar' => 'القصيم', 'en' => 'Qassim'],
            ['ar' => 'الشرقية', 'en' => 'Eastern Province'],
            ['ar' => 'عسير', 'en' => 'Asir'],
            ['ar' => 'تبوك', 'en' => 'Tabuk'],
            ['ar' => 'حائل', 'en' => 'Hail'],
            ['ar' => 'الحدود الشمالية', 'en' => 'Northern Borders'],
            ['ar' => 'نجران', 'en' => 'Najran'],
            ['ar' => 'الباحة', 'en' => 'Al Baha'],
            ['ar' => 'جيزان', 'en' => 'Jizan'],
            ['ar' => 'الجوف', 'en' => 'Al Jouf'],
            ['ar' => 'الطائف', 'en' => 'Taif'],
            ['ar' => 'ينبع', 'en' => 'Yanbu'],
            ['ar' => 'أبها', 'en' => 'Abha'],
            ['ar' => 'عرعر', 'en' => 'Arar'],
        ];


        foreach ($citiesList as $city) {
            City::updateOrCreate(
                ['city_name_ar' => $city['ar'], 'city_name_en' => $city['en']]
            );
        }
    }
}
