<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MatchController;
use App\Livewire\User\{Payment,Personal,Step1};
use App\Livewire\User\Male\Start;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get('dashboard',[HomeController::class, 'index'])->name('home');
Route::get('terms',[HomeController::class, 'terms'])->name('terms');
Route::get('documentations',[HomeController::class, 'documentations'])->name('documentations');

Route::get('pay',function()
{
    if(session('stripe_payment_id'))
    {
        return redirect()->route('dashboard.match.personal');
    }
    return redirect()->route('dashboard.match.payment');
})->name('pay');


Route::group(['prefix'=>'match','controller'=>MatchController::class,'as'=>'match.'],function(){
    Route::get('payment',Payment::class)->name('payment');
    Route::get('personal',Personal::class)->name('personal');
    Route::get('personal/step1',Step1::class)->name('step1');
});

Route::group(['prefix'=>'male','controller'=>MatchController::class,'as'=>'male.'],function(){
    Route::get('start/{wife}',Start::class)->name('index');
});
