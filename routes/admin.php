<?php

use App\Http\Controllers\Admin\Dashboard\CouponCodesController;
use App\Http\Controllers\Admin\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Admin\Dashboard\QuestionsController;
use App\Http\Controllers\Admin\Dashboard\UsersController;
use App\Http\Controllers\Admin\Dashboard\RequestController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('', HomeController::class);

Route::group(['middleware' => 'guest'], function () {
    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('login',[LoginController::class,'auth']);
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('dashboard',DashboardHomeController::class)->name('dashboard');
    Route::post('logout',[LoginController::class,'logout'])->name('logout');

    Route::group(['prefix' => 'coupon-codes','as'=>'coupons.'], function () {
        Route::get('',[CouponCodesController::class,'index'])->name('index');
        Route::get('add',[CouponCodesController::class,'add'])->name('add');
        Route::post('add',[CouponCodesController::class,'save'])->name('save');
        Route::get('view/{id}',[CouponCodesController::class,'view'])->name('view');
        Route::get('edit/{id}',[CouponCodesController::class,'edit'])->name('edit');
        Route::post('edit/{id}',[CouponCodesController::class,'update'])->name('update');
        Route::get('delete/{id}',[CouponCodesController::class,'delete'])->name('delete');
        Route::post('delete/{id}',[CouponCodesController::class,'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'users','as'=>'users.'], function () {
        Route::get('',[UsersController::class,'index'])->name('index');
        Route::get('view/{id}',[UsersController::class,'view'])->name('view');
        Route::get('edit/{id}',[UsersController::class,'edit'])->name('edit');
        Route::post('edit/{id}',[UsersController::class,'update'])->name('update');
        Route::get('delete/{id}',[UsersController::class,'delete'])->name('delete');
        Route::post('delete/{id}',[UsersController::class,'destroy'])->name('destroy');
    });

    Route::resource('requests', RequestController::class);
    Route::resource('questions', QuestionsController::class);
});
