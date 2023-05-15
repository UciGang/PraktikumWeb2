<?php

use Illuminate\Support\Facades\Route;

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