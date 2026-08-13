<?php

namespace App\Http\Services\User;

use App\Http\Repositories\User\ProfileUserRepository;
use App\Utils\UploadUtils;
use Illuminate\Http\Request;

class ProfileUserService
{
    public function __construct(protected ProfileUserRepository $repo) {}

    public function getUserProfile()
    {
        return $this->repo->getUser();
    }

    public function updateUserProfile(Request $request)
    {
        $userId = getCurrUserIdHelper();

        $this->repo->updateUser([
            'name' => $request->name,
        ], $userId);

        $filesName = UploadUtils::uploadMultipleImageToPublic($request->images);

        $this->repo->updateLogoUser($filesName, $userId);

        return [
            'logo' => (count($filesName) == 0) ? (currUserHelper()->logo ?? '') : $filesName[0],
        ];
    }
}
