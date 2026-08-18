<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])
    ->middleware(['auth:admin', 'role:Super-Admin|admin', 'verified'])->name('dashboard');

Route::prefix('uploads-private')->middleware('auth:admin')->controller(App\Http\Controllers\FileController::class)->group(function () {
    Route::get('/{filename}', 'getSensitiveImage')->name('uploads-private');
});

Route::prefix('/dashboard')->middleware(['auth:admin', 'role:Super-Admin|admin', 'verified'])->group(function () {
    Route::prefix('/categories')->controller(App\Http\Controllers\Dashboard\CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.categories.index');
        Route::get('/create', 'create')->name('dashboard.categories.create');
        Route::post('/store', 'store')->name('dashboard.categories.store');
        Route::get('/edit/{id}', 'edit')->name('dashboard.categories.edit');
        Route::post('/update/{id}', 'update')->name('dashboard.categories.update');
        Route::delete('/delete/{id}', 'delete')->name('dashboard.categories.delete');
        Route::post('/update-status', 'updateStatusActiveCategory')->name('dashboard.categories.update-status');
    });
    Route::prefix('/custom-fields-category')->controller(App\Http\Controllers\Dashboard\CustomFieldController::class)->group(function () {
        Route::get('/{categoryId}', 'index')->name('dashboard.custom-fields.index');
        Route::post('/save-custom-field', 'saveCustomField')->name('dashboard.custom-fields.save-custom-field');
        Route::delete('/delete/{id}', 'delete')->name('dashboard.custom-fields.delete');
    });
    Route::prefix('/customers')->controller(App\Http\Controllers\Dashboard\CustomerController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.customers.index');
        Route::post('/update-status', 'updateStatus')->name('dashboard.customers.update-status');
        Route::delete('/delete/{id}', 'delete')->name('dashboard.customers.delete');
    });
    Route::prefix('/vendors-management/vendors')->controller(App\Http\Controllers\Dashboard\VendorsManagement\VendorManagementController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.vendors-management.vendors.index');
        Route::get('/show/{userId}', 'show')->name('dashboard.vendors-management.vendors.show');
        Route::delete('/delete/{userId}', 'deleteVendor');
        Route::post('/update-status', 'updateStatus')->name('dashboard.vendors-management.vendors.update-status');
    });
    Route::prefix('/vendors-management/join-requests')->controller(App\Http\Controllers\Dashboard\VendorsManagement\JoinRequestVendorController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.vendors-management.join-requests.index');
        Route::get('/show/{userId}', 'show')->name('dashboard.vendors-management.join-requests.show');
        Route::post('/active-status', 'activeStatusVendor')->name('dashboard.vendors-management.join-requests.active-status');
        Route::post('/rejected-status/{userId}', 'rejectedStatusVendor')->name('dashboard.vendors-management.join-requests.rejected-status');
        Route::delete('/delete/{userId}', 'deleteVendor');
    });
    Route::prefix('/requests-management')->controller(App\Http\Controllers\Dashboard\RequestsManagement\RequestManagementController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.requests-management.index');
        Route::get('/show/{id}', 'show')->name('dashboard.requests-management.show');
        Route::post('/update-status', 'updateStatus')->name('dashboard.requests-management.update-status');
        Route::delete('/delete/{id}', 'delete');
    });
    Route::prefix('/response-management')->controller(App\Http\Controllers\Dashboard\RequestResponseManagement\RequestResponseManagementController::class)->group(function () {
        Route::get('/responses/{requestId}', 'index')->name('dashboard.response-management.responses');
    });
    Route::prefix('/shipping-request-management')->controller(App\Http\Controllers\Dashboard\ShippingRequestManagement\ShippingRequestManagementController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.shipping-request-management.index');
        Route::get('/show/{id}', 'show')->name('dashboard.shipping-request-management.show');
        Route::post('/update-status', 'updateStatus')->name('dashboard.shipping-request-management.update-status');
        Route::post('/create-order-shipping', 'createOrderShippingRequest')->name('dashboard.shipping-request-management.create-order-shipping');
        Route::delete('/delete/{id}', 'delete')->name('dashboard.shipping-request-management.delete');
    });
    Route::prefix('/complaint-management')->controller(App\Http\Controllers\Dashboard\ComplaintManagement\ComplaintManagemntController::class)->group(function () {
        Route::get('/complaints', 'index')->name('dashboard.complaint-management.complaints');
    });

    Route::prefix('logs')->controller(App\Http\Controllers\Dashboard\AdminLogController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.logs.index');
        Route::post('/clear-logs', 'clearLogs')->name('dashboard.logs.clear-logs');
        Route::get('/download-logs', 'downloadLogs')->name('dashboard.logs.download-logs');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
