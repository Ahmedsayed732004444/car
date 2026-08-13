<?php

namespace App\Http\Controllers\API\V1\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\Profile\UpdateVendorProfileRequest;
use App\Http\Requests\Vendor\Profile\UploadCommercialRecordRequest;
use App\Http\Services\Vendor\ProfileVendorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileVendorController extends Controller
{
    public function __construct(protected ProfileVendorService $profileVendorService) {}

    public function getVendorProfile(Request $request)
    {
        $vendor = $this->profileVendorService->getVendorProfile();

        return $vendor ?
            buildApiResponseHelper(true, 'تم جلب بياناتك بنجاح', $vendor)
            : buildApiResponseHelper(false, 'لا توجد بيانات');
    }

    public function updateVendorProfile(UpdateVendorProfileRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = $this->profileVendorService->updateVendorProfile($request);
            DB::commit();
            return buildApiResponseHelper(true, 'تم تحديث بياناتك بنجاح', ['user' => $user]);
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return buildApiResponseHelper(false, 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
        }
    }

    public function uploadCommercialRecordImage(UploadCommercialRecordRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->profileVendorService->uploadCommercialRecordImage($request);
            DB::commit();
            return buildApiResponseHelper(true, 'تم رفع صورة السجل التجاري بنجاح');
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return buildApiResponseHelper(false, 'حدث خطاء أثنا الرفع ... الرجاء المحاولة مرة اخرى');
        }
    }
}
