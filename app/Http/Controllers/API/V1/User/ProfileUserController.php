<?php

namespace App\Http\Controllers\API\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Profile\UpdateProfileUserRequest;
use App\Http\Services\User\ProfileUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileUserController extends Controller
{
    public function __construct(protected ProfileUserService $service) {}

    public function getUserProfile(Request $request)
    {
        $user = $this->service->getUserProfile();

        return $user ?
            buildApiResponseHelper(true, 'تم جلب بياناتك بنجاح', $user)
            : buildApiResponseHelper(false, 'لا توجد بيانات');
    }

    public function updateUserProfile(UpdateProfileUserRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = $this->service->updateUserProfile($request);
            DB::commit();
            return buildApiResponseHelper(true, 'تم تحديث بياناتك بنجاح', ['user' => $user]);
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return buildApiResponseHelper(false, 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
        }
    }
}
