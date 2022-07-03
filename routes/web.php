<?php

use App\Http\Controllers\mahasiswaController;
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

// Route::get('/', function () {
//     return view('mahasiswa.menu');
// });

Route::get('/menu', [mahasiswaController::class, 'index'])->name('baca-data');
Route::get('/tambahData', [mahasiswaController::class, 'create'])->name('tambah-data');
Route::post('/simpanData', [mahasiswaController::class, 'store'])->name('simpan-data');


