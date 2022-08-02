<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PegawaiController;

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
    return view('welcome');
});


Route::get('/pegawai', [PegawaiController::class, 'index'])->name('index');
Route::get('/create', [PegawaiController::class, 'create'])->name('create');
Route::post('/store', [PegawaiController::class, 'store'])->name('store');
Route::get('/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/update', [PegawaiController::class, 'update'])->name('update');
Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('delete');
Route::get('/pegawai/cari', [PegawaiController::class, 'cari'])->name('pegawai.cari');
