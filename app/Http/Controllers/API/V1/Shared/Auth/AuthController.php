<?php

namespace App\Http\Controllers\API\V1\Shared\Auth;

use App\Exceptions\CustomResponseException;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Shared\Devices\UserDeviceRepository;
use App\Http\Requests\Shared\Auth\LoginWithOtpRequest;
use App\Http\Services\Shared\Auth\AuthService;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(protected AuthService $authService, protected UserDeviceRepository $userDeviceRepository) {}

    public function register(Request $request)
    {
        try {

            return $this->authService->register($request);
        } catch (Exception $e) {
            throw new CustomResponseException(message: __('exceptions.internal_server_error_500'), previous: $e);
        }
    }

    public function loginWithOtp(LoginWithOtpRequest $request)
    {
        try {
            return $this->authService->loginWithOtp($request);
        } catch (Exception $e) {
            throw new CustomResponseException(message: 'حدث خطأ أثناء تسجيل الدخول', previous: $e);
        }
    }


    public function logout(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            abort(401); //Unauthenticated
        }

        // Revoke this device's push token WHILE the Sanctum token is still
        // valid — unregistering after deleting the token would 401 on this
        // same request. This is what stops a reused/shared phone from
        // continuing to receive the previous account's notifications.
        if ($request->filled('fcmToken')) {
            $this->userDeviceRepository->revokeByToken((string) $request->fcmToken, 'logout');
        }

        $user->currentAccessToken()->delete();

        return buildApiResponseHelper(true, 'تم تسجيل الخروج بنجاح');
    }
}
