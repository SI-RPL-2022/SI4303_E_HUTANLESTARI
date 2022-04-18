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

Route::prefix('information')->group(function () {
    Route::get('/informasi', [\App\Http\Controllers\informationController::class, 'index'])->name('informasi.index');
});

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('campaign')->group(function (){
    Route::get('/index' , [\App\Http\Controllers\campaignController::class , 'index'])->name('campaign.index');
    Route::get('/formcampaign' , [\App\Http\Controllers\campaignController::class , 'form'])->name('campaign.form');
    Route::post('/formcampaign' , [\App\Http\Controllers\campaignController::class , 'formpost'])->name('campaign.form');
    Route::get('/detail/{id}' , [\App\Http\Controllers\campaignController::class , 'detail'])->name('campaign.detail');
    Route::get('/donasi/{id}' , [\App\Http\Controllers\campaignController::class , 'donasi'])->name('campaign.donasi');
    Route::post('/donasi/{id}' , [\App\Http\Controllers\campaignController::class , 'donasipost'])->name('campaign.donasi');

});

