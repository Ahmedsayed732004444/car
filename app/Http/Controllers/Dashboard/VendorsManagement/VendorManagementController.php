<?php

namespace App\Http\Controllers\Dashboard\VendorsManagement;

use App\Enums\StatusUserEnum;
use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\VendorsManagement\VendorManagementService;
use App\Models\User;
use App\Traits\NotificationsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class VendorManagementController extends Controller
{
    use NotificationsTrait;

    public function __construct(protected VendorManagementService $service) {}

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->service->index($request);
        }
        return view('dashboard.vendors-management.vendors-manage.index');
    }

    public function show(Request $request, $userId)
    {
        $result = $this->service->getVendorsWithoutPendingByUserId($request, $userId);
        return view('dashboard.vendors-management.vendors-manage.show', $result);
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|exists:users,id',
            'status' => ['required', Rule::enum(StatusUserEnum::class)],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::find($request->id);
        $user->status = $request->status;

        $message = '';
        if ($request->status == StatusUserEnum::Active->value) {
            $message = 'تم تفعيل حساب الشركة بنجاح';
        } else if ($request->status == StatusUserEnum::Inactive->value) {
            $message = 'تم تعطيل حساب الشركة بنجاح';
        } else if ($request->status == StatusUserEnum::Suspended->value) {
            $message = 'تم تعليق حساب الشركة بنجاح';
        } else if ($request->status == StatusUserEnum::Rejected->value) {
            $message = 'تم رفض حساب الشركة بنجاح';
        }

        if ($user->save()) {
            $this->notifyByID(
                userId: $request->id,
                title: $message,
                body: $message
            );
            return buildApiResponseHelper(true, $message);
        }

        return buildApiResponseHelper(false, 'لم يتم التعديل بنجاح');
    }

    public function deleteVendor(Request $request, $userId)
    {
        DB::beginTransaction();
        try {
            $deleted = $this->service->deleteVendor($request, $userId);
            DB::commit();
            if ($deleted) {
                return buildApiResponseHelper(true, 'تم حذف الشركة بنجاح');
            } else {
                return buildApiResponseHelper(false, 'لم يتم حذف الشركة، الرجاء المحاولة مرة اخرى');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
        }
    }
}
