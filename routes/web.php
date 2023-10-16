<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SPKKController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\SPKTPController;
use App\Http\Controllers\SKUsahaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\SKUsahaAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.layouts.master');
// });
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/admin/login',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin/login',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');


Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin/dashboard/', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    // Route::get('/kategori', [KategoriController::class, 'show']);
    // Route::get('/kategori_form_add', [KategoriController::class, 'viewAddKategori'])->name('kategori_form_add');
    // Route::post('/submitAddKategori', [KategoriController::class, 'addKategori'])->name('submitAddKategori');
    // Route::get('/kategori_form_edit/{id}', [KategoriController::class, 'viewEditKategori']);
    // Route::post('/submitEditKategori/{id}', [KategoriController::class, 'editKategori']);
    // Route::get('/deleteKategori/{id}', [KategoriController::class, 'deleteKategori']);



    // Route::get('/books', [BooksController::class, 'show']);
    // Route::get('/books_form_add', [BooksController::class, 'viewAddBooks'])->name('books_form_add');
    // Route::post('/submitAddBooks', [BooksController::class, 'addBooks'])->name('submitAddBooks');
    // Route::get('/books_form_edit/{id}', [BooksController::class, 'viewEditBooks']);
    // Route::post('/submitEditBooks/{id}', [BooksController::class, 'editBooks']);
    // Route::get('/deleteBooks/{id}', [BooksController::class, 'deleteBooks']);


    // Route::get('/peminjaman', [PeminjamanController::class, 'show']);
    // Route::get('/peminjaman_books_form_add/{id}', [PeminjamanController::class, 'viewAddPeminjaman']);
    // Route::post('/submitAddPeminjaman', [PeminjamanController::class, 'addPeminjaman'])->name('submitAddPeminjaman');


    // ==============================

    // Route::get('/books_form_add', [SKUsahaController::class, 'viewAddBooks'])->name('books_form_add');
    // Route::post('/submitAddBooks', [SKUsahaController::class, 'addBooks'])->name('submitAddBooks');
    // Route::get('/books_form_edit/{id}', [SKUsahaController::class, 'viewEditBooks']);
    // Route::post('/submitEditBooks/{id}', [SKUsahaController::class, 'editBooks']);
    // Route::get('/deleteBooks/{id}', [SKUsahaController::class, 'deleteBooks']);


    Route::get('/admin/sku_data', [SKUsahaAdminController::class, 'show'])->name('admin.sku_data');
    Route::get('/admin/sku_form_process/{skUsahaID}/{userID}', [SKUsahaAdminController::class, 'viewProcessSKUsaha'])->name('admin.sku_form_process');
    Route::post('/admin/submitProccessSKUsahaSuccess', [SKUsahaAdminController::class, 'processSKUsahaSuccess'])->name('admin.submitProccessSKUsahaSuccess');
    Route::post('/admin/submitProccessSKUsahaFailed', [SKUsahaAdminController::class, 'processSKUsahaFailed'])->name('admin.submitProccessSKUsahaFailed');
});









// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





// Route::group(['middleware' => ['auth:admin']], function() {
//     Route::get('/admin/dashboard', [HomeAdminController::class, 'index'])->middleware('auth:admin');
//     // Route::get('/test',[TestController::class,'index'])->name('test');
// });


Route::group(['middleware' => ['auth:web']], function() {

    Route::get('/user/dashboard', [HomeController::class, 'index'])->name('user.dashboard');

    // ===========SKU======================
    Route::get('/user/sku_data', [SKUsahaController::class, 'show'])->name('user.sku_data');
    Route::get('/user/sku_form_add', [SKUsahaController::class, 'viewAddSKUsaha'])->name('user.sku_form_add');
    Route::post('/user/submitAddSKUsaha', [SKUsahaController::class, 'addSKUsaha'])->name('user.submitAddSKUsaha');
    Route::get('/user/sku_form_edit/{id}', [SKUsahaController::class, 'viewEditSKUsaha'])->name('user.sku_form_edit.id');
    Route::post('/user/submitEditSKUsaha/{id}', [SKUsahaController::class, 'submitEditSKUsaha']);
    Route::get('/user/sku_data_detail/{id}', [SKUsahaController::class, 'viewDetailSKUsaha'])->name('user.sku_data_detail');


    // ===========KTP===================
    Route::get('/user/SPKTP_data', [SPKTPController::class, 'show'])->name('user.SPKTP_data');
    Route::get('/user/SPKTP_form_add', [SPKTPController::class, 'viewAddSPKTP'])->name('user.SPKTP_form_add');
    Route::post('/user/submitAddSPKTP', [SPKTPController::class, 'addSPKTP'])->name('user.submitAddSPKTP');
    Route::get('/user/SPKTP_form_edit/{id}', [SPKTPController::class, 'viewEditSPKTP'])->name('user.SPKTP_form_edit.id');
    Route::post('/user/submitEditSPKTP/{id}', [SPKTPController::class, 'submitEditSPKTP']);
    Route::get('/user/SPKTP_data_detail/{id}', [SPKTPController::class, 'viewDetailSPKTP'])->name('user.SPKTP_data_detail');


     // ===========KK===================
     Route::get('/user/SPKK_data', [SPKKController::class, 'show'])->name('user.SPKK_data');
     Route::get('/user/SPKK_form_add', [SPKKController::class, 'viewAddSPKK'])->name('user.SPKK_form_add');
     Route::post('/user/submitAddSPKK', [SPKKController::class, 'addSPKK'])->name('user.submitAddSPKK');
     Route::get('/user/SPKK_form_edit/{id}', [SPKKController::class, 'viewEditSPKK'])->name('user.SPKK_form_edit.id');
     Route::post('/user/submitEditSPKK/{id}', [SPKKController::class, 'submitEditSPKK']);
     Route::get('/user/SPKK_data_detail/{id}', [SPKKController::class, 'viewDetailSPKK'])->name('user.SPKK_data_detail');

      // ===========Pengaduan Masarakat===================
    //   Route::get('/user/SPKK_data', [SPKTPController::class, 'show'])->name('user.SPKK_data');
    //   Route::get('/user/SPKK_form_add', [SPKTPController::class, 'viewAddSPKK'])->name('user.SPKK_form_add');
    //   Route::post('/user/submitAddSPKK', [SPKTPController::class, 'addSPKK'])->name('user.submitAddSPKK');
    //   Route::get('/user/SPKK_form_edit/{id}', [SPKTPController::class, 'viewEditSPKK'])->name('user.SPKK_form_edit.id');
    //   Route::post('/user/submitEditSPKK/{id}', [SPKTPController::class, 'submitEditSPKK']);
    //   Route::get('/user/SPKK_data_detail/{id}', [SPKTPController::class, 'viewDetailSPKK'])->name('user.SPKK_data_detail');

});
