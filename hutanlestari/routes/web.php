<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('donasi', function () {
    return view('donasi');
});

Route::prefix('information')->group(function () {
    Route::get('/informasi', [\App\Http\Controllers\informationController::class, 'index'])->name('informasi.index');
});
