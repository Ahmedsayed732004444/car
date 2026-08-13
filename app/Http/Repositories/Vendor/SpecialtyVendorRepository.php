<?php

namespace App\Http\Repositories\Vendor;

use App\Models\VendorBrandCar;
use App\Models\VendorCity;
use App\Models\VendorSpecialty;

class SpecialtyVendorRepository
{
    public function getCategoriesSpecialty()
    {
        return VendorSpecialty::where('vendor_id', getCurrVendorIdHelper())->pluck('category_id')->toArray();
    }

    // Delete the old services that are not present in the new array.
    public function deleteOldCategoriesSpecialty(array $newSpecialties, $vendorId)
    {
        return VendorSpecialty::where('vendor_id', $vendorId)->whereNotIn('category_id', $newSpecialties)->delete();
    }

    public function updateCategorySpecialty(array $newSpecialties, $vendorId)
    {
        foreach ($newSpecialties as $categoryId) {
            VendorSpecialty::updateOrCreate(['vendor_id' => $vendorId, 'category_id' => $categoryId]);
        }
    }

    public function getVendorCities()
    {
        return VendorCity::where('vendor_id', getCurrVendorIdHelper())->pluck('city_id')->toArray();
    }

    public function updateVendorCities(array $newCities, $vendorId)
    {
        VendorCity::where('vendor_id', $vendorId)->whereNotIn('city_id', $newCities)->delete();
        foreach ($newCities as $cityId) {
            VendorCity::updateOrCreate(['vendor_id' => $vendorId, 'city_id' => $cityId]);
        }
    }

    public function getCategoriesSpecialtyAndHasBrand($vendorId)
    {
        return VendorSpecialty::joinCategoryHasBrandFields()
            ->where('vendor_specialties.vendor_id', $vendorId)
            ->get(['vendor_specialties.category_id', 'vendor_specialties.is_receive_all_brand_cars']);
    }

    public function getVendorBrandsCar($vendorId, $categoryId)
    {
        return VendorBrandCar::where('vendor_id', $vendorId)->where('category_id', $categoryId)->pluck('brand_car_id')->toArray();
    }
}
