<?php

namespace App\Http\Repositories\Vendor;

use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorDocument;

class ProfileVendorRepository
{
    public function getVendor()
    {
        $vendor = Vendor::join('users', 'users.id', '=', 'vendors.user_id')
            ->where('vendors.user_id', getCurrUserIdHelper())
            ->select(
                'users.logo',
                'vendors.company_name_ar',
                'vendors.description',
                'vendors.commercial_record',
                'vendors.date_expire_commercial_record',
                'vendors.phone_contact',
                'vendors.is_hide_phone_contact',
            )
            ->first();

        if ($vendor && $vendor->logo) {
            if (str_starts_with($vendor->logo, 'http://') || str_starts_with($vendor->logo, 'https://')) {
                $vendor->logo_url = $vendor->logo;
            } else {
                $cleanLogo = str_replace('uploads/', '', $vendor->logo);
                $vendor->logo_url = asset('uploads/' . $cleanLogo);
            }
        } else if ($vendor) {
            $vendor->logo_url = null;
        }

        return $vendor;
    }

    public function updateVendor(array $data, $userId)
    {
        return Vendor::where('user_id', $userId)->update($data);
    }

    public function updateLogoVendor(array $filesName, $userId)
    {
        if (! (count($filesName) == 0)) {
            return User::where('id', $userId)->update(['logo' => $filesName[0]]);
        }
    }

    public function uploadCommercialRecordImage(string $filesName)
    {
        return VendorDocument::where('vendor_id', getCurrVendorIdHelper())->update(['file_path' => $filesName]);
    }
}
