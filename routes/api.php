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

    Route::prefix('/notifications')->group(function () {
        Route::get('/unread-counts', [App\Http\Controllers\API\NotificationBadgeController::class, 'unreadCounts']);
        Route::post('/mark-category-read', [App\Http\Controllers\API\NotificationBadgeController::class, 'markCategoryRead']);
        Route::post('/mark-entity-read', [App\Http\Controllers\API\NotificationBadgeController::class, 'markEntityRead']);
        Route::get('/', [App\Http\Controllers\API\V1\Shared\NotificationController::class, 'index']);
    });
});

Route::get('/uploads/{filename}', [App\Http\Controllers\FileController::class, 'getImage']);

Route::middleware('auth:sanctum')->controller(App\Http\Controllers\FileController::class)->group(function () {
    Route::get('/uploads-private/{filename}', 'getSensitiveImage');
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
    
    Route::get('/test-db', function () {
        $vendor = \App\Models\RequestResponse::joinRequestCustomer()
            ->leftJoinVendor()
            ->leftJoinVendorToUser()
            ->select('request_responses.id as response_id', 'users.logo as vendor_logo', 'vendors.id as v_id', 'vendors.user_id as vu_id')
            ->first();
        return response()->json($vendor);
    });
    
    Route::get('/update-cat', function () {
        \App\Models\Category::where('id', 2)->update([
            'cat_name_ar' => 'قطع غيار تشليح',
            'cat_name_en' => 'Scrap Spare Parts'
        ]);
        
        \App\Models\CacheStaticDataVersion::where('entity_name', 'categories')->update(['last_updated_at' => now()]);
        \App\Models\CacheStaticDataVersion::where('entity_name', 'category_has_brand_field')->update(['last_updated_at' => now()]);
        
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        
        return response()->json(['success' => true]);
    });
});
