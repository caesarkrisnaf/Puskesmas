<?php

use App\Http\Controllers\PasienController;
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

// route untuk menampilkan  daftar pasien
Route::get('/pasien', [PasienController::class, 'index']);

//route untuk menampilkan tambah pasiens
Route::get('/pasien/create', [PasienController::class, 'create']);

//route untuk memproses form tambah pasien
Route::post('/pasien', [PasienController::class, 'store']);