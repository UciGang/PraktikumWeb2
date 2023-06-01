<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AboutController;

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