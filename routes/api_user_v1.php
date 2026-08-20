<?php

use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum', 'role:user'])->group(function () {});

Route::middleware(['auth:sanctum', 'role:user'])->group(function () {
    Route::prefix('/request')->controller(App\Http\Controllers\API\V1\User\Requests\RequestController::class)->group(function () {
        Route::post('/check-eligible-vendors', 'checkEligibleVendors');
        Route::post('/confirm-request', 'confirmRequest');
        Route::post('/confirm-shipping-request', 'ConfirmShippingRequest');
        Route::post('/confirm-price-shipping-request', 'confirmPriceShippingRequest');
    });

    Route::prefix('/my-requests')->controller(App\Http\Controllers\API\V1\User\MyRequests\MyRequestUserController::class)->group(function () {
        Route::get('/', 'getMyRequest');
        Route::get('/{requestId}', 'getMyRequestById');
        Route::get('/responses/{requestId}', 'getResponsesMyRequest');
        Route::get('/response/{responseId}', 'getResponseRequestById');
        Route::post('/update-status', 'updateStatus');
    });

    Route::prefix('/complaints')->controller(App\Http\Controllers\API\V1\Shared\Complaints\ComplaintController::class)->group(function () {
        Route::post('/complaint-vendor-service', 'complaintVendorService');
    });

    Route::prefix('/profile')->controller(App\Http\Controllers\API\V1\User\ProfileUserController::class)->group(function () {
        Route::get('/', 'getUserProfile');
        Route::post('/update', 'updateUserProfile');
    });

    Route::prefix('/vendor-profiles')->controller(App\Http\Controllers\API\V1\User\VendorProfileController::class)->group(function () {
        Route::get('/{vendorId}', 'show');
        Route::post('/{vendorId}/rate', 'storeReview');
    });
});
