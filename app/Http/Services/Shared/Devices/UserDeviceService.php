<?php

namespace App\Http\Services\Shared\Devices;

use App\Http\Repositories\Shared\Devices\UserDeviceRepository;
use App\Http\Services\BaseService;
use Illuminate\Http\Request;

class UserDeviceService extends BaseService
{
    public function __construct(protected UserDeviceRepository $repository) {}

    public function register(Request $request)
    {
        $userId = getCurrUserIdHelper();

        $this->repository->registerForUser($userId, [
            'token' => $request->fcmToken,
            'device_id' => $request->deviceId,
            'platform' => $request->platform,
            'device_model' => $request->deviceModel,
            'os_version' => $request->osVersion,
            'app_version' => $request->appVersion,
        ]);

        return buildApiResponseHelper(true, 'تم تسجيل الجهاز بنجاح');
    }

    public function unregister(Request $request)
    {
        $this->repository->revokeByToken($request->fcmToken, 'client_unregister');

        return buildApiResponseHelper(true, 'تم إلغاء تسجيل الجهاز بنجاح');
    }
}
