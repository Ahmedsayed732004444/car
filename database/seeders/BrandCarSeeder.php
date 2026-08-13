<?php

namespace Database\Seeders;

use App\Models\BrandCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carBrandsList = [
            // A
            ['ar' => 'آكورا', 'en' => 'Acura'],
            ['ar' => 'ألفا روميو', 'en' => 'Alfa Romeo'],
            ['ar' => 'أستون مارتن', 'en' => 'Aston Martin'],
            ['ar' => 'أودي', 'en' => 'Audi'],
            // B
            ['ar' => 'بي إم دبليو', 'en' => 'BMW'],
            ['ar' => 'بنتلي', 'en' => 'Bentley'],
            ['ar' => 'بوغاتي', 'en' => 'Bugatti'],
            ['ar' => 'بي واي دي', 'en' => 'BYD'],
            ['ar' => 'باوجون', 'en' => 'Baojun'],
            // C
            ['ar' => 'كاديلاك', 'en' => 'Cadillac'],
            ['ar' => 'شيفروليه', 'en' => 'Chevrolet'],
            ['ar' => 'كوبرا', 'en' => 'Cupra'],
            ['ar' => 'سيتروين', 'en' => 'Citroën'],
            // D
            ['ar' => 'دودج', 'en' => 'Dodge'],
            ['ar' => 'ديلوريان', 'en' => 'DeLorean'],
            // F
            ['ar' => 'فيراري', 'en' => 'Ferrari'],
            ['ar' => 'فيات', 'en' => 'Fiat'],
            ['ar' => 'فورد', 'en' => 'Ford'],
            // G
            ['ar' => 'جينيسيس', 'en' => 'Genesis'],
            ['ar' => 'جي إم سي', 'en' => 'GMC'],
            ['ar' => 'جيلي', 'en' => 'Geely'],
            // H
            ['ar' => 'هوندا', 'en' => 'Honda'],
            ['ar' => 'هيونداي', 'en' => 'Hyundai'],
            ['ar' => 'هافال', 'en' => 'Haval'],
            // J-K
            ['ar' => 'جاكوار', 'en' => 'Jaguar'],
            ['ar' => 'جيب', 'en' => 'Jeep'],
            ['ar' => 'كيا', 'en' => 'Kia'],
            ['ar' => 'كوينيغسيغ', 'en' => 'Koenigsegg'],
            // L
            ['ar' => 'لكزس', 'en' => 'Lexus'],
            ['ar' => 'لامبورغيني', 'en' => 'Lamborghini'],
            ['ar' => 'لاند روفر', 'en' => 'Land Rover'],
            ['ar' => 'لوسيد', 'en' => 'Lucid'],
            ['ar' => 'لوتس', 'en' => 'Lotus'],
            // M
            ['ar' => 'مازدا', 'en' => 'Mazda'],
            ['ar' => 'ماكلارين', 'en' => 'McLaren'],
            ['ar' => 'مرسيدس', 'en' => 'Mercedes‑Benz'],
            ['ar' => 'مازيراتي', 'en' => 'Maserati'],
            ['ar' => 'MG', 'en' => 'MG'],
            ['ar' => 'مينى', 'en' => 'MINI'],
            // N
            ['ar' => 'نيسان', 'en' => 'Nissan'],
            ['ar' => 'نوبل', 'en' => 'Noble'],
            // P
            ['ar' => 'بيجو', 'en' => 'Peugeot'],
            ['ar' => 'بورشه', 'en' => 'Porsche'],
            ['ar' => 'بروتون', 'en' => 'Proton'],
            // R
            ['ar' => 'رولز رويس', 'en' => 'Rolls‑Royce'],
            ['ar' => 'رينو', 'en' => 'Renault'],
            ['ar' => 'رام', 'en' => 'Ram'],
            // S
            ['ar' => 'سكودا', 'en' => 'Škoda'],
            ['ar' => 'سوبارو', 'en' => 'Subaru'],
            ['ar' => 'سوزوكي', 'en' => 'Suzuki'],
            ['ar' => 'سمارت', 'en' => 'Smart'],
            // T
            ['ar' => 'تسلا', 'en' => 'Tesla'],
            ['ar' => 'تويوتا', 'en' => 'Toyota'],
            // V-W
            ['ar' => 'فولكس واجن', 'en' => 'Volkswagen'],
            ['ar' => 'فولفو', 'en' => 'Volvo'],
            ['ar' => 'فوكسهول', 'en' => 'Vauxhall'],
            // وغيرها (غير شائع)
            ['ar' => 'أبارث', 'en' => 'Abarth'],
            ['ar' => 'أباتي', 'en' => 'Borgward'],
            ['ar' => 'لوكاس', 'en' => 'Lucid'],
            ['ar' => 'أبيرو', 'en' => 'Apollo'],
        ];

        foreach ($carBrandsList as $brand) {
            BrandCar::updateOrCreate(
                ['brand_name_ar' => $brand['ar'], 'brand_name_en' => $brand['en']],
                ['brand_name_ar' => $brand['ar'], 'brand_name_en' => $brand['en']],
            );
        }
    }
}
