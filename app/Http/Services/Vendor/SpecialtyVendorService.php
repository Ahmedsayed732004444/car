<?php

namespace App\Http\Services\Vendor;

use App\Http\Repositories\Vendor\SpecialtyVendorRepository;
use App\Http\Services\BaseService;
use Illuminate\Http\Request;

class SpecialtyVendorService extends BaseService
{
    public function __construct(protected SpecialtyVendorRepository $repo) {}

    public function getCategoriesSpecialty()
    {
        return $this->repo->getCategoriesSpecialty();
    }

    public function updateCategorySpecialty(Request $request)
    {
        $vendorId = getCurrVendorIdHelper();
        $this->repo->deleteOldCategoriesSpecialty($request->categoriesIds, $vendorId);
        $this->repo->updateCategorySpecialty($request->categoriesIds, $vendorId);
    }

    public function getVendorCities()
    {
        return $this->repo->getVendorCities();
    }

    public function updateVendorCities(Request $request)
    {
        $vendorId = getCurrVendorIdHelper();
        $this->repo->updateVendorCities($request->citiesIds, $vendorId);
    }

    public function getVendorBrandsCar()
    {
        $vendorId = getCurrVendorIdHelper();
        $categories = $this->repo->getCategoriesSpecialtyAndHasBrand($vendorId);

        $result = [];

        foreach ($categories as $item) {
            $temp = [];
            $temp['category_id'] = $item->category_id;
            $temp['is_receive_all_brand_cars'] = $item->is_receive_all_brand_cars;
            $temp['brand_ids'] = $item->is_receive_all_brand_cars ? [] : $this->repo->getVendorBrandsCar($vendorId, $item->category_id);

            array_push($result, $temp);
        }

        return $result;
    }
}
