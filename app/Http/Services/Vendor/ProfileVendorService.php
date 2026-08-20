<?php

namespace App\Http\Services\Vendor;

use App\Http\Repositories\Vendor\ProfileVendorRepository;
use App\Utils\UploadUtils;
use Illuminate\Http\Request;

class ProfileVendorService
{
    public function __construct(protected ProfileVendorRepository $profileVendorRepository) {}

    public function getVendorProfile()
    {
        return $this->profileVendorRepository->getVendor();
    }

    public function updateVendorProfile(Request $request)
    {
        $userId = getCurrUserIdHelper();

        $this->profileVendorRepository->updateVendor([
            'company_name_ar' => $request->companyNameAr,
            'description' => $request->description,
            'commercial_record' => $request->commercialRecord,
            'date_expire_commercial_record' => $request->dateExpireCommercialRecord,
            'phone_contact' => $request->phoneContact,
            'is_hide_phone_contact' => $request->isHidePhoneContact,
        ], $userId);

        $filesName = UploadUtils::uploadMultipleImageToPublic($request->images);

        $this->profileVendorRepository->updateLogoVendor($filesName, $userId);

        $freshUser = \App\Models\User::find($userId);

        return [
            'user' => [
                'logo' => $freshUser->logo ?? '',
            ],
        ];
    }

    public function uploadCommercialRecordImage(Request $request)
    {
        $filesName = UploadUtils::encryptAndStoreSensitiveFile($request->images[0]);
        $this->profileVendorRepository->uploadCommercialRecordImage($filesName);
    }
}
