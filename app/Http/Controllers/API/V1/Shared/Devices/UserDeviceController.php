<?php

namespace App\Http\Controllers\API\V1\Shared\Devices;

use App\Exceptions\CustomResponseException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shared\Devices\RegisterDeviceRequest;
use App\Http\Requests\Shared\Devices\UnregisterDeviceRequest;
use App\Http\Services\Shared\Devices\UserDeviceService;
use Exception;

class UserDeviceController extends Controller
{
    public function __construct(protected UserDeviceService $service) {}

    public function register(RegisterDeviceRequest $request)
    {
        try {
            return $this->service->register($request);
        } catch (Exception $e) {
            report($e);
            throw new CustomResponseException('حدث خطأ أثناء تسجيل الجهاز');
        }
    }

    public function unregister(UnregisterDeviceRequest $request)
    {
        try {
            return $this->service->unregister($request);
        } catch (Exception $e) {
            report($e);
            throw new CustomResponseException('حدث خطأ أثناء إلغاء تسجيل الجهاز');
        }
    }
}
