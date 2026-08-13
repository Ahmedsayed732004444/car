<?php

namespace App\Http\Controllers\API\V1\Shared\Auth;

use App\Exceptions\CustomResponseException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shared\Auth\LoginWithOtpRequest;
use App\Http\Services\Shared\Auth\AuthService;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(protected AuthService $authService) {}

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

        $user->currentAccessToken()->delete();

        return buildApiResponseHelper(true, 'تم تسجيل الخروج بنجاح');
    }
}
