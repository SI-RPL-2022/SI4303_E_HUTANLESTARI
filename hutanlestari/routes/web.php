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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'searchDonasi'])->name('searchDonasi');
Route::post('/homev', [App\Http\Controllers\HomeController::class, 'searchVolunteer'])->name('searchvolunteer');


Route::prefix('information')->group(function () {
    Route::get('/informasi', [\App\Http\Controllers\informationController::class, 'index'])->name('informasi.index');
    Route::get('/flora/{id}', [\App\Http\Controllers\informationController::class, 'flora'])->name('informasi.flora');
    Route::get('/fauna/{id}', [\App\Http\Controllers\informationController::class, 'fauna'])->name('informasi.fauna');
});

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
    Route::get('/dashboard', [\App\Http\Controllers\adminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/feedback' , [\App\Http\Controllers\adminController::class , 'feedback'])->name('admin.feedback');

    Route::get('/verifikasidana', [\App\Http\Controllers\adminController::class, 'verifdana'])->name('admin.verifdana');
    Route::get('/verifikasidanapost/{id}', [\App\Http\Controllers\adminController::class, 'verifdanapost'])->name('admin.verifdanapost');
    Route::get('/verifikasidanatolak/{id}', [\App\Http\Controllers\adminController::class, 'tolakdana'])->name('admin.tolakdana');

    Route::get('/verifikasivoluntolak/{id}', [\App\Http\Controllers\adminController::class, 'tolakvolun'])->name('admin.tolakvolun');
    Route::get('/verifikasivolunteer', [\App\Http\Controllers\adminController::class, 'verifvolun'])->name('admin.verifvolun');
    Route::get('/verifikasivolunteerpost/{id}', [\App\Http\Controllers\adminController::class, 'verifvolunpost'])->name('admin.volunpost');

    Route::get('/input/informasifauna', [\App\Http\Controllers\adminController::class, 'informasifaunaform'])->name('admin.informasifaunaform');
    Route::post('/input/informasifauna', [\App\Http\Controllers\adminController::class, 'informasifaunaformpost'])->name('admin.informasifaunaform');
    Route::get('/input/deleteinformasifauna/{id}', [\App\Http\Controllers\adminController::class, 'deleteinfromasifauna'])->name('admin.deleteinfromasifauna');
    Route::get('/input/deleteinformasiflora/{id}', [\App\Http\Controllers\adminController::class, 'deleteinformasiflora'])->name('admin.deleteinformasiflora');

    Route::get('/verifblog' , [\App\Http\Controllers\adminController::class , 'blog'])->name('admin.verifblog');
    Route::get('/verifblog/{id}' , [\App\Http\Controllers\adminController::class , 'blogverif'])->name('admin.verifblogpost');
     Route::get('/tolakblog/{id}' , [\App\Http\Controllers\adminController::class , 'tolakblog'])->name('admin.tolakblog');

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


Route::prefix('dashboard')->group(function (){
    Route::get('/campaign' , [\App\Http\Controllers\dashboardController::class , 'volun'])->name('dashboard.volun');
    Route::get('/dana' , [\App\Http\Controllers\dashboardController::class , 'dana'])->name('dashboard.dana');
    Route::get('/florafauna' , [\App\Http\Controllers\dashboardController::class , 'flora'])->name('dashboard.flora');
    Route::get('/settingss' , [\App\Http\Controllers\dashboardController::class , 'setting'])->name('settings');
    Route::post('/settings/{id}' , [\App\Http\Controllers\dashboardController::class , 'settings'])->name('settingspost');
    Route::get('/changepassword' , [\App\Http\Controllers\dashboardController::class , 'changepassword'])->name('changepassword');
    Route::post('/changepassword' , [\App\Http\Controllers\dashboardController::class , 'changepasswordpost'])->name('changepassword');
    Route::get('/blog' , [\App\Http\Controllers\dashboardController::class , 'blog'])->name('dashboard.blog');

});


Route::get('/ourteam', [\App\Http\Controllers\HomeController::class , 'aboutus'])
    ->name('ourteam');

Route::post('/tentangkami/post' , [\App\Http\Controllers\HomeController::class , 'tentangkamipost'])->name('admin.tentangkamipost');
Route::post('/tentangkami/edit/{id}' , [\App\Http\Controllers\HomeController::class , 'edittentangkami'])->name('admin.tentangkamiedit');
Route::get('/tentangkami/delete/{id}' , [\App\Http\Controllers\HomeController::class , 'deletetentangkami'])->name('admin.tentangkamidelete');

Route::get('/feedback' , [\App\Http\Controllers\dashboardController::class , 'feedback'])->name('feedback');
Route::post('/feedback' , [\App\Http\Controllers\dashboardController::class , 'feedbackpost'])->name('feedback');

Route::prefix('blog')->group(function (){
    Route::get('/formblog' , [\App\Http\Controllers\blogController::class , 'form'])->name('blog.form')->middleware(['auth']);
Route::post('/formblog' , [\App\Http\Controllers\blogController::class , 'formpost'])->name('blog.form')->middleware(['auth']);
Route::get('/index' , [\App\Http\Controllers\blogController::class , 'index'])->name('blog.index');
Route::get('/detail/{id}' , [\App\Http\Controllers\blogController::class , 'detail'])->name('blog.detail');
});
