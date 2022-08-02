<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/pegawai', [ApiPegawaiController::class, 'index'])->name('index');
Route::get('/create', [ApiPegawaiController::class, 'create'])->name('create');
Route::post('/store', [ApiPegawaiController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ApiPegawaiController::class, 'edit']);
Route::post('/update', [ApiPegawaiController::class, 'update'])->name('update');
Route::get('/delete/{id}', [ApiPegawaiController::class, 'delete'])->name('delete');