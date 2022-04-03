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
Route::get('LoginUser', function () {
    return view('LoginUser');
});
=======

>>>>>>> a5428141916f3244ad51f020fe336a8037994cba
>>>>>>> 58df0990faa4b36eae660abdebd663a6ec2afcb2
