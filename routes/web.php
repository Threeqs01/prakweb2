<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormController;
use App\Htpp\Controllers\UserController;
use App\Htpp\Controllers\DashboardFrontendController;
use App\Http\Controllers\PesananController;

// use Illuminate\Support\Facades\Route;

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

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

// ini route untuk backend atau admin
Route::prefix('admin')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk', [PesananController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
});

// ini route untuk frontend atau user
Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [DashboardFrontendController::class, 'index']);
});