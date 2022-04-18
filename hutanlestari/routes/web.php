<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('donasi', function () {
    return view('donasi');
});

Route::prefix('information')->group(function () {
    Route::get('/informasi', [\App\Http\Controllers\informationController::class, 'index'])->name('informasi.index');
});

// Route::get('pagehome', function () {
//     return view('Pagehome');
// });

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
=======
Route::prefix('campaign')->group(function (){
    Route::get('/index' , [\App\Http\Controllers\campaignController::class , 'index'])->name('campaign.index');
    Route::get('/formcampaign' , [\App\Http\Controllers\campaignController::class , 'form'])->name('campaign.form');
    Route::post('/formcampaign' , [\App\Http\Controllers\campaignController::class , 'formpost'])->name('campaign.form');
    Route::get('/detail/{id}' , [\App\Http\Controllers\campaignController::class , 'detail'])->name('campaign.detail');
});
>>>>>>> d0366c4fbd035f0c013a5d6104bfb8c83c31224b
