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
    return view('/home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('donasi', function () {
    return view('donasi');
});

Route::get('infokehutanan', function () {
    return view('infokehutanan');
});

Route::get('our_team', function () {
    return view('our_team');
});

<<<<<<< HEAD
Route::get('campaign', function () {
    return view('campaign/index');
});

=======
>>>>>>> 7780b274d2d006cbe804c4225fd420c8627053de
Route::get('layoutsapp', function () {
    return view('layouts/app');
});

<<<<<<< HEAD
Route::get('detail', function () {
    return view('campaign/detail');
});

Route::get('form', function () {
    return view('campaign/form');
});
=======


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 7780b274d2d006cbe804c4225fd420c8627053de
