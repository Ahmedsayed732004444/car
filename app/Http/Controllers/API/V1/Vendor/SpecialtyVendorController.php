<?php

namespace App\Http\Controllers\API\V1\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\SpecialtyVendor\UpdateCategorySpecialtyRequest;
use App\Http\Requests\Vendor\SpecialtyVendor\UpdateVendorCityRequest;
use App\Http\Services\Vendor\SpecialtyVendorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialtyVendorController extends Controller
{
    public function __construct(protected SpecialtyVendorService $specialtyVendorService) {}

    public function getCategoriesSpecialty()
    {
        $categoriesSpecialty = $this->specialtyVendorService->getCategoriesSpecialty();
        return $categoriesSpecialty ?
            buildApiResponseHelper(true, 'تم جلب الخدمات بنجاح', ['categoriesSpecialty' => $categoriesSpecialty])
            : buildApiResponseHelper(false, 'لا توجد خدمات أشتركت فيها حالياً');
    }

    public function updateCategorySpecialty(UpdateCategorySpecialtyRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->specialtyVendorService->updateCategorySpecialty($request);
            DB::commit();
            return buildApiResponseHelper(true, 'تم حفظ الخدمات بنجاح');
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return buildApiResponseHelper(false, 'حدث خطاء في أثناء حفظ الخدمات ... الرجاء المحاولة مرة اخرى');
        }
    }

    public function getVendorCities()
    {
        $cities = $this->specialtyVendorService->getVendorCities();
        return $cities ?
            buildApiResponseHelper(true, 'تم جلب المدن بنجاح', ['cities' => $cities])
            : buildApiResponseHelper(false, 'لا توجد مدن');
    }

    public function updateVendorCities(UpdateVendorCityRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->specialtyVendorService->updateVendorCities($request);
            DB::commit();
            return buildApiResponseHelper(true, 'تم حفظ المدن بنجاح');
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return buildApiResponseHelper(false, 'حدث خطاء في أثناء حفظ المدن ... الرجاء المحاولة مرة اخرى');
        }
    }

    public function getVendorBrandsCar(Request $request)
    {
        $brands = $this->specialtyVendorService->getVendorBrandsCar();
        return $brands ?
            buildApiResponseHelper(true, 'تم جلب الماركات بنجاح', $brands)
            : buildApiResponseHelper(false, 'لا توجد ماركات');
    }
}
