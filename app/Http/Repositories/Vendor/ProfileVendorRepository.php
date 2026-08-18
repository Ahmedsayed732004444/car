<?php

namespace App\Http\Repositories\Vendor;

use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorDocument;

class ProfileVendorRepository
{
    public function getVendor()
    {
        return Vendor::join('users', 'users.id', '=', 'vendors.user_id')
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
