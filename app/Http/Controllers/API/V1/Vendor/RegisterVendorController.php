<?php

namespace App\Http\Controllers\API\V1\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\RegisterVendor\CreateRegisterVendorRequest;
use App\Http\Services\Shared\RegisterVendorService;
use App\Traits\NotificationsTrait;
use Illuminate\Support\Facades\DB;

class RegisterVendorController extends Controller
{
    use NotificationsTrait;

    public function __construct(protected RegisterVendorService $registerVendorService) {}

    public function registerVendor(CreateRegisterVendorRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->registerVendorService->registerVendor($request);

            DB::commit();
            $this->notifyToAdmin(title: 'طلب إنضمام جديد', body: 'هناك طلب إنظمام جديد ... طلب ÷نشاء حساب شركة جديد');
            return buildApiResponseHelper(true, 'تم التسجيل بنجاح ... سيتم الرد عليك من قبل الإدارة لاحقاً');
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return buildApiResponseHelper(false, 'حدث خطاء في التسجيل ... الرجاء المحاولة مرة اخرى');
        }
    }
}
