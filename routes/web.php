<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
//midlawer auth
Route::group(['middleware' => 'auth'], function () {
    //halaman dashboard

    //Route untuk menampilkan dashboard admin
    Route::get('/', [DashboardController::class, 'index']);
    // route untuk menampilkan  daftar pasien
    Route::get('/pasien', [PasienController::class, 'index']);
    //route untuk menampilkan tambah pasiens
    Route::get('/pasien/create', [PasienController::class, 'create']);
    //route untuk menampilkan form edit pasien
    Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
    Route::put('/pasien/{id}', [PasienController::class, 'update']);
    //route untuk hapus
    Route::delete('/pasien', [PasienController::class, 'destroy']);
    //route untuk memproses form tambah pasien
    Route::post('/pasien', [PasienController::class, 'store']);

    //Dokter
    Route::get('/dokter', [DokterController::class, 'index']);
    Route::get('/dokter/create', [DokterController::class, 'create']);
    Route::get('/dokter/edit/{id}', [DokterController::class, 'edit']);
    Route::put('/dokter/{id}', [DokterController::class, 'update']);
    Route::post('/dokter', [DokterController::class, 'store']);
    Route::delete('/dokter', [DokterController::class, 'destroy']);
});

Auth::routes();
