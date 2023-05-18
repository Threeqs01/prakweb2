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
    return "Selamat Siang Pak Rojul";
}); 

Route::get('/', function () {
    return view('about', [
        "nama" => "Sulis",
        "umur" => 20,
        "email" => "threeqs05@gmail.com"
    ]);
});

Route::get('/nf', function () {
    return view('nf', [
        "nama" => "STT Nurul Fikri",
        "lokasi" => "Depok",
    ]);
});

Route::get('/table', function () {
    return view('table');
});
