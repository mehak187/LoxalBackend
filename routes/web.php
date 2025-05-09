<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommonController;

Route::group(['middleware' => ['CheckAdminAuth']], function () {
    Route::prefix('admin')->group(function(){
        Route::controller(AdminController::class)->group(function(){
            Route::get('addNewUser','addNewUser')->name('admin.addNewUser');
            Route::get('categoryManagement','categoryManagement')->name('admin.categoryManagement');
            Route::get('dashboard','dashboard')->name('admin.dashboard');
            Route::get('driversRequestDetails','driversRequestDetails')->name('admin.driversRequestDetails');
            Route::get('itemsManagement','itemsManagement')->name('admin.itemsManagement');
            Route::get('notification','notification')->name('admin.notification');
            Route::get('rentalLogDetails','rentalLogDetails')->name('admin.rentalLogDetails');
            Route::get('rentalLog','rentalLog')->name('admin.rentalLog');
            Route::get('saleLog','saleLog')->name('admin.saleLog');
            Route::get('saleLogDetails','saleLogDetails')->name('admin.saleLogDetails');
            Route::get('userDetails','userDetails')->name('admin.userDetails');
            Route::get('userManagement','userManagement')->name('admin.userManagement');
            Route::get('categoriesDetail/{id}','categoriesDetail')->name('admin.categoriesDetail');
            Route::get('itemsDetail/{id}','itemsDetail')->name('admin.itemsDetail');

        });
    });
});
Route::controller(CommonController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});
