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
<<<<<<< HEAD
    return view('auth.login');
=======
    return view('/home');
});

Route::get('/', function () {
    return view('welcome');
>>>>>>> 39f7b9fef6a7622a303aeec7209b3366b39ed376
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
Route::get('login', function () {
    return view('login');
});
=======
Route::get('layoutsapp', function () {
    return view('layouts/app');
});



>>>>>>> 39f7b9fef6a7622a303aeec7209b3366b39ed376
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
