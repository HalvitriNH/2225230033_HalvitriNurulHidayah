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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);
Route::post('check-out', [App\Http\Controllers\PesanController::class, 'check_out']);
Route::get('check-out', [App\Http\Controllers\PesanController::class, 'check_out']);
Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class, 'delete']);
Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi']);
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);