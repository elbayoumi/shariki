<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Models\Request\F00Request;
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

Route::get('/', function () {
    if(auth()->guard('web')->check()){
        return redirect()->route('dashboard.home');
    }elseif(auth()->guard('admin')->check()){
        return redirect()->route('admin.dashboard');
    }
    // dd(F00Request::all());
    return view('index');
});



Route::group(['prefix'=>'auth'],function(){
    Route::get('register',[RegisterController::class, 'register'])->name('register');
    Route::post('register',[RegisterController::class, 'store']);

    Route::get('login',[LoginController::class, 'login'])->name('login');
    Route::post('login',[LoginController::class, 'authenticate']);

    Route::get('verify',[LoginController::class, 'verify'])->name('verify');
    Route::post('verify',[LoginController::class, 'verifycode']);
    Route::post('resend',[LoginController::class, 'resend'])->name('resend');


    Route::get('logout',[LoginController::class, 'logout'])->name('logout')->middleware('auth');


    Route::get('password/forgot',[ForgotPasswordController::class, 'index'])->name('password.reset');
    Route::post('password/forgot',[ForgotPasswordController::class, 'submit']);

    Route::get('password/reset/{token}',[ResetPasswordController::class, 'index'])->name('password.reset.token');
    Route::post('password/reset/{token}',[ResetPasswordController::class, 'submit'])->name('password.reset.token');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');


Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/documentations', [App\Http\Controllers\HomeController::class, 'documentations'])->name('documentations');

