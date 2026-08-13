<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('/register-vendor', [App\Http\Controllers\API\V1\Vendor\RegisterVendorController::class, 'registerVendor']);

Route::middleware(['auth:sanctum', 'role:vendor'])->group(function () {
    Route::prefix('/new-requests')->controller(App\Http\Controllers\API\V1\Vendor\NewRequestController::class)->group(function () {
        Route::get('/get-all-new-requests', 'getNewRequests');
        Route::get('/details-new-requests/{requestId}', 'detailsNewRequests');
    });

    Route::prefix('/responses-requests')->controller(App\Http\Controllers\API\V1\Vendor\ResponseRequestController::class)->group(function () {
        Route::get('/get-my-response-requests', 'getMyResponseRequests');
        Route::post('/send-response-request', 'sendResponseRequest');
        Route::get('/details-response-request/{responseId}', 'detailsResponseRequests');
    });

    Route::prefix('/specialties')->controller(App\Http\Controllers\API\V1\Vendor\SpecialtyVendorController::class)->group(function () {
        Route::get('/get-categories-specialty', 'getCategoriesSpecialty');
        Route::post('/update-category-specialty', 'updateCategorySpecialty');
        Route::get('/get-vendor-cities', 'getVendorCities');
        Route::post('/update-vendor-cities', 'updateVendorCities');
        Route::get('/get-vendor-brands-car', 'getVendorBrandsCar');
    });

    Route::prefix('/profile')->controller(App\Http\Controllers\API\V1\Vendor\ProfileVendorController::class)->group(function () {
        Route::get('/', 'getVendorProfile');
        Route::post('/update', 'updateVendorProfile');
        Route::post('/upload-commercial-record', 'uploadCommercialRecordImage');
    });
    Route::prefix('/app-commission')->controller(App\Http\Controllers\API\V1\Vendor\AppCommissionController::class)->group(function () {
        Route::post('/pay', 'payAppCommission');
    });
});
