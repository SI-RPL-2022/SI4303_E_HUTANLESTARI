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

Route::get('infokehutanan', function () {
    return view('infokehutanan');
});

Route::get('our_team', function () {
    return view('our_team');
});

Route::get('/donasi' , [\App\Http\Controllers\DonasiController::class , 'donasi'])->name('donasi');
Route::post('/donasi' , [\App\Http\Controllers\DonasiController::class , 'donasi'])->name('donasi');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
