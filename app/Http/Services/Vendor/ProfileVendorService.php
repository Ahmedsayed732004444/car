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

        $images = $request->file('images') ?: $request->file('image');
        if ($images) {
            if (!is_array($images)) {
                $images = [$images];
            }
            $filesName = UploadUtils::uploadMultipleImageToPublic($images);
            if (!empty($filesName)) {
                $this->profileVendorRepository->updateLogoVendor($filesName, $userId);
            }
        }

        $logo = currUserHelper()?->logo;
        return [
            'logo' => $logo ?? '',
            'logo_url' => $logo ? asset('uploads/' . $logo) : '',
        ];
    }

    public function uploadCommercialRecordImage(Request $request)
    {
        $filesName = UploadUtils::encryptAndStoreSensitiveFile($request->images[0]);
        $this->profileVendorRepository->uploadCommercialRecordImage($filesName);
    }
}
