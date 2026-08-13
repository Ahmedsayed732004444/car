<?php

namespace App\Http\Controllers\Dashboard\VendorsManagement;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\VendorsManagement\JoinRequestVendorService;
use App\Traits\NotificationsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class JoinRequestVendorController extends Controller
{
    use NotificationsTrait;

    public function __construct(protected JoinRequestVendorService $service) {}

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->service->index($request);
        }
        return view('dashboard.vendors-management.join-request-vendor.index');
    }

    public function show(Request $request, $userId)
    {
        $result = $this->service->getVendorsByUserId($request, $userId);
        return view('dashboard.vendors-management.join-request-vendor.show-vendor', $result);
    }

    public function activeStatusVendor(Request $request)
    {
        DB::beginTransaction();
        try {
            $updated = $this->service->activeStatusVendor($request);
            DB::commit();
            if ($updated) {
                $this->notifyByID(
                    userId: $request->userId,
                    title: 'تم قبول طلب انضمامك بنجاح',
                    body: 'تهانينا! تم قبول طلب انضمام شركتك  بنجاح إلى منصتنا. يمكنك الآن تسجيل الدخول والبدء في استخدام خدماتنا.'
                );
                return redirect()->route('dashboard.vendors-management.join-requests.index')->with('success', 'تم قبول طلب انضمامك بنجاح');
            } else {
                return back()->with('error', 'لم يتم قبول طلب انضمامك، الرجاء المحاولة مرة اخرى');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
        }
    }

    public function rejectedStatusVendor(Request $request, $userId)
    {
        DB::beginTransaction();
        try {
            $updated = $this->service->rejectedStatusVendor($request, $userId);
            DB::commit();
            if ($updated) {
                $this->notifyByID(
                    userId: $request->userId,
                    title: 'تم رفض طلب انضمامك ',
                    body: 'تم رفض طلب انضمامك ... ' . ' ' . $request->rejectReason
                );
                return redirect()->route('dashboard.vendors-management.join-requests.index')->with('success', 'تم رفض طلب الإنظمام ');
            } else {
                return back()->with('error', 'لم يتم رفض طلب  الرجاء المحاولة مرة اخرى');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
        }
    }

    public function deleteVendor(Request $request, $userId)
    {
        DB::beginTransaction();
        try {
            $deleted = $this->service->deleteVendor($request, $userId);
            DB::commit();
            if ($deleted) {
                return buildApiResponseHelper(true, 'تم حذف طلب الإنظمام بنجاح');
            } else {
                return buildApiResponseHelper(false, 'لم يتم حذف طلب الإنظمام، الرجاء المحاولة مرة اخرى');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
        }
    }
}
