<?php

namespace App\Http\Services\Dashboard\VendorsManagement;

use App\Enums\StatusUserEnum;
use App\Enums\user\UserRoleEnum;
use App\Http\Repositories\Dashboard\VendorsManagement\JoinRequestVendorRepository;
use App\Http\Repositories\Dashboard\VendorsManagement\VendorManagementRepository;
use App\Http\Services\BaseService;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JoinRequestVendorService extends BaseService
{
    public function __construct(protected JoinRequestVendorRepository $repo, protected VendorManagementRepository $vendorManagementRepo) {}

    public function index(Request $request)
    {
        $searchValue = $request->input('search.value');

        return $this->repo->formatResponseDataTables(
            draw: $request->input('draw'),
            recordsCount: $this->repo->recordsCountPendingVendors(),
            recordsCountwithFilter: $this->repo->recordsCountPendingVendorsWithFilter($searchValue),
            records: $this->repo->index($request, $searchValue)
        );
    }

    public function getVendorsByUserId(Request $request, $userId)
    {
        $this->validate(['userId' => $userId], ['userId' => 'required|integer|exists:users,id'], [
            'userId.required' => 'معرف المستخدم مطلوب',
            'userId.exists' => 'معرف المستخدم غير صحيح',
            'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
        ]);

        $vendor = $this->vendorManagementRepo->getVendorsByUserId($userId, StatusUserEnum::Pending->value);
        $vendorDocument = $this->vendorManagementRepo->getVendorDocumentByVendorId($vendor->vendor_id);
        $vendorCities = $this->vendorManagementRepo->getVendorCities($vendor->vendor_id);
        $vendorCategories = $this->vendorManagementRepo->getVendorCategories($vendor->vendor_id);

        return compact('vendor', 'vendorDocument', 'vendorCities', 'vendorCategories');
    }

    public function activeStatusVendor(Request $request)
    {
        $this->validate($request->all(), ['userId' => 'required|integer|exists:users,id'], [
            'userId.required' => 'معرف المستخدم مطلوب',
            'userId.exists' => ' المستخدم غير موجود',
            'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
        ]);

        return $this->vendorManagementRepo->updateVendorStatus($request->userId, StatusUserEnum::Active->value);
    }

    public function rejectedStatusVendor(Request $request, $userId)
    {
        $request->merge(['userId' => $userId]);
        $this->validate($request->all(), [
            'userId' => 'required|integer|exists:users,id',
            'rejectReason' => 'required|string|max:500',
        ], [
            'userId.required' => 'معرف المستخدم مطلوب',
            'userId.exists' => ' المستخدم غير موجود',
            'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
            'rejectReason.required' => 'سبب الرفض مطلوب',
            'rejectReason.string' => 'سبب الرفض يجب ان يكون نص',
            'rejectReason.max' => 'سبب الرفض يجب ان يكون اقل من 500 حرف',
        ]);

        $updated = $this->vendorManagementRepo->updateVendorStatus($request->userId, StatusUserEnum::Rejected->value);
        if ($updated)
            Vendor::where('user_id', $request->userId)->update(['verification_notes' => $request->rejectReason]);

        return $updated;
    }

    public function deleteVendor(Request $request, $userId)
    {
        $this->validate(['userId' => $userId], ['userId' => 'required|integer|exists:users,id'], [
            'userId.required' => 'معرف المستخدم مطلوب',
            'userId.exists' => ' المستخدم غير موجود',
            'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
        ]);

        return $this->vendorManagementRepo->deleteVendor($userId);
    }
}
