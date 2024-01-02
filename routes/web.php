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

Route::get('/donat', [App\Http\Controllers\DonatController::class, 'index']);
Route::get('/donat/create', [App\Http\Controllers\DonatController::class, 'create']);
Route::post('/donat', [App\Http\Controllers\DonatController::class, 'store']);
Route::get('/donat/edit/{id}', [App\Http\Controllers\DonatController::class, 'edit']);
Route::patch('/donat/{id}', [App\Http\Controllers\DonatController::class, 'update']);
Route::delete('/donat/{id}', [App\Http\Controllers\DonatController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/penjualan', [App\Http\Controllers\PenjualanController::class, 'index']);
Route::get('/penjualan/create', [App\Http\Controllers\PenjualanController::class, 'create']);
Route::post('/penjualan', [App\Http\Controllers\PenjualanController::class, 'store']);
Route::get('/penjualan/edit/{id}', [App\Http\Controllers\PenjualanController::class, 'edit']);
Route::patch('/penjualan/{id}', [App\Http\Controllers\PenjualanController::class, 'update']);
Route::delete('/penjualan/{id}', [App\Http\Controllers\PenjualanController::class, 'destroy']);

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy']);

Route::post('/users', [UserController::class, 'store']);