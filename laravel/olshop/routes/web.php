<?php

use App\Http\Controllers\PesananController;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriProdukController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Haaayyy keeviiinnn";
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Diri q",
        "nama" => "Muhammad Rifky Syahputra",
        "umur" => 19,
        "email" => "mrsplah183@gmail.com",
    ]);
});

Route::get('/nf', function () {
    return view('nf');
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/output', function () {
    return view('output');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/skill', [FormController::class, 'index']);
Route::post('/skill', [FormController::class, 'skill']);

// rute admin backend
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);

});

// rute frontend
Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [FrontController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);

});

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);
        Route::get('/pesanan', [PesananController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/kategori/create', [KategoriProdukController::class, 'create']);
        Route::post('/kategori/store', [KategoriProdukController::class, 'store']);
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
        Route::get('/kategoriproduk/delete/{id}', [KategoriProdukController::class, 'destroy']);
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');