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

Route::get('opendonasi', function () {
    return view('opendonasi');
});

<<<<<<< HEAD

=======
Route::get('LoginRegister', function () {
    return view('LoginRegister');
});
>>>>>>> 05d09bc3d90fea9f7d26e85b73b4fcbeca6da2b8
