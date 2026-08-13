<?php

namespace App\Http\Repositories\User;

use App\Models\User;

class ProfileUserRepository
{
    public function getUser()
    {
        return User::where('id', getCurrUserIdHelper())->first(['id', 'name', 'logo']);
    }

    public function updateUser(array $data, $userId)
    {
        return User::where('id', $userId)->update($data);
    }

    public function updateLogoUser(array $filesName, $userId)
    {
        if (! (count($filesName) == 0)) {
            return User::where('id', $userId)->update(['logo' => $filesName[0]]);
        }
    }
}
