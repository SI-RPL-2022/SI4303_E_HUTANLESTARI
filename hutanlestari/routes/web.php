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

Route::get('infokehutanan', function () {
    return view('infokehutanan');
});

Route::get('our_team', function () {
    return view('our_team');
});

Route::get('campaign', function () {
    return view('campaign/index');
});

Route::get('layoutsapp', function () {
    return view('layouts/app');
});

Route::get('detail', function () {
    return view('campaign/detail');
});