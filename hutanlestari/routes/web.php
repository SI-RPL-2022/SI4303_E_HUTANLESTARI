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



Route::prefix('information')->group(function () {
    Route::get('/informasi', [\App\Http\Controllers\informationController::class, 'index'])->name('informasi.index');
    Route::get('/flora/{id}', [\App\Http\Controllers\informationController::class, 'flora'])->name('informasi.flora');
    Route::get('/fauna/{id}', [\App\Http\Controllers\informationController::class, 'fauna'])->name('informasi.fauna');
});

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/homev', [App\Http\Controllers\HomeController::class, 'searchVolunteer'])->name('searchvolunteer');



Route::prefix('campaign')->group(function () {
    Route::get('/index', [\App\Http\Controllers\campaignController::class, 'index'])->name('campaign.index');
    Route::get('/formcampaign', [\App\Http\Controllers\campaignController::class, 'form'])->name('campaign.form');
    Route::post('/formcampaign', [\App\Http\Controllers\campaignController::class, 'formpost'])->name('campaign.form');
    Route::get('/detail/{id}', [\App\Http\Controllers\campaignController::class, 'detail'])->name('campaign.detail');
    Route::post('/donasi/{id}', [\App\Http\Controllers\campaignController::class, 'donasipost'])->name('campaign.donasi');
    Route::get('/donasi/{id}', [\App\Http\Controllers\campaignController::class, 'donasi'])->name('campaign.donasi');
    Route::get('/volunteer/{id}', [\App\Http\Controllers\campaignController::class, 'volunteer'])->name('campaign.volunteer')->middleware(['auth']);
    Route::post('/volunteer/{id}', [\App\Http\Controllers\campaignController::class, 'volunteerpost'])->name('campaign.volunteer')->middleware(['auth']);

    Route::get('/donasiflorafauna', [\App\Http\Controllers\campaignController::class, 'donasiflorafauna'])->name('campaign.donasiflorafauna')->middleware(['auth']);
    Route::post('/florafaunapost', [\App\Http\Controllers\campaignController::class, 'florafaunapost'])->name('campaign.florafaunapost');
});

Route::prefix('information')->group(function () {
    Route::get('/informasi', [\App\Http\Controllers\informationController::class, 'index'])->name('informasi.index');
    Route::get('/flora/{id}', [\App\Http\Controllers\informationController::class, 'flora'])->name('informasi.flora');
    Route::get('/fauna/{id}', [\App\Http\Controllers\informationController::class, 'fauna'])->name('informasi.fauna');
});



Route::prefix('admin')->group(function () {
    Route::get('/input/informasifauna', [\App\Http\Controllers\adminController::class, 'informasifaunaform'])->name('admin.informasifaunaform');
    Route::post('/input/informasifauna', [\App\Http\Controllers\adminController::class, 'informasifaunaformpost'])->name('admin.informasifaunaform');
    Route::get('/input/deleteinformasifauna/{id}', [\App\Http\Controllers\adminController::class, 'deleteinfromasifauna'])->name('admin.deleteinfromasifauna');
    Route::get('/input/deleteinformasiflora/{id}', [\App\Http\Controllers\adminController::class, 'deleteinformasiflora'])->name('admin.deleteinformasiflora');

    Route::get('/input/informasifaunaedit/{id}', [\App\Http\Controllers\adminController::class, 'informasifaunaedit'])->name('admin.informasifaunaedit');

    Route::post('/input/informasifaunaedit/{id}', [\App\Http\Controllers\adminController::class, 'informasifaunaeditpost'])->name('admin.informasifaunaeditpost');


    Route::get('/input/informasiflora', [\App\Http\Controllers\adminController::class, 'informasifloraform'])->name('admin.informasifloraform');
    Route::get('/input/informasifloraedit/{id}', [\App\Http\Controllers\adminController::class, 'informasifloraedit'])->name('admin.informasifloraedit');
    Route::post('/input/informasifloraedit/{id}', [\App\Http\Controllers\adminController::class, 'informasifloraeditpost'])->name('admin.informasifloraeditpost');
    Route::post('/input/informasiflora', [\App\Http\Controllers\adminController::class, 'informasifloraformpost'])->name('admin.informasifloraform');

    Route::get('/verifikasiflora', [\App\Http\Controllers\adminController::class, 'verifikasiflora'])->name('admin.verifflora');
    Route::get('verifikasiflora/{id}', [\App\Http\Controllers\adminController::class, 'verifflorapost'])->name('admin.verifflorapost');
    Route::get('tolakflora/{id}', [\App\Http\Controllers\adminController::class, 'tolakflora'])->name('admin.tolakflora');
});


Route::prefix('dashboard')->group(function () {
    Route::get('/florafauna', [\App\Http\Controllers\dashboardController::class, 'flora'])->name('dashboard.flora');
});
