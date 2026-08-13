<?php

use App\Http\Controllers\API\V1\Shared\CacheStaticDataVersionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/user')->group(base_path('routes/api_user_v1.php'));
Route::prefix('v1/vendor')->group(base_path('routes/api_vendor_v1.php'));

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->middleware(['auth:sanctum'])->group(function () {
    Route::prefix('/chat/messages')->controller(App\Http\Controllers\API\V1\Shared\Conversations\MessageConversationController::class)->group(function () {
        Route::get('/{conversationId}', 'index');
        Route::post('/send', 'store');
    });
    Route::prefix('/chat/conversations')->controller(App\Http\Controllers\API\V1\Shared\Conversations\ConversationController::class)->group(function () {
        Route::post('/create-conversation', 'store');
        Route::get('/user-conversations', 'getUserConversations');
        Route::get('/vendor-conversations', 'getVendorConversations');
    });

    Route::prefix('/notifications')->controller(App\Http\Controllers\API\V1\Shared\NotificationController::class)->group(function () {
        Route::get('/', 'index');
    });
});

Route::middleware('auth:sanctum')->controller(App\Http\Controllers\FileController::class)->group(function () {
    Route::get('/uploads-private/{filename}', 'getSensitiveImage');
    Route::get('/uploads/{filename}', 'getImage');
});

Route::prefix('v1/auth')->controller(App\Http\Controllers\API\V1\Shared\Auth\AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login-with-otp', 'loginWithOtp');
    Route::post('/logout', 'logout')->middleware('auth:sanctum');
});

Route::middleware('auth:sanctum')->controller(App\Http\Controllers\FileController::class)->group(function () {
    Route::get('/{filename}', 'getSensitiveImage');
});

Route::prefix('v1')->group(function () {
    Route::post('/cache/check-updates', [CacheStaticDataVersionController::class, 'checkUpdates']);
});
