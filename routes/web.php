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
Route::get('/kost', [App\Http\Controllers\kostController::class, 'index']);
Route::get('/kost/create', [App\Http\Controllers\kostController::class, 'create']);
Route::post('/kost', [App\Http\Controllers\kostController::class, 'store']);
Route::get('/kost/{id}/edit', [App\Http\Controllers\kostController::class, 'edit']);
Route::patch('/kost/{id}', [App\Http\Controllers\kostController::class, 'update']);
Route::delete('/kost/{id}', [App\Http\Controllers\kostController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/member', [App\Http\Controllers\memberController::class, 'index']);
Route::get('/member/create', [App\Http\Controllers\memberController::class, 'create']);
Route::post('/member', [App\Http\Controllers\memberController::class, 'store']);
Route::get('/member/{id}/edit', [App\Http\Controllers\memberController::class, 'edit']);
Route::patch('/member/{id}', [App\Http\Controllers\memberController::class, 'update']);
Route::delete('/member/{id}', [App\Http\Controllers\memberController::class, 'destroy']);

Route::get('/booking', [App\Http\Controllers\bookingController::class, 'index']);
Route::get('/booking/create', [App\Http\Controllers\bookingController::class, 'create']);
Route::post('/booking', [App\Http\Controllers\bookingController::class, 'store']);
Route::get('/booking/{id}/edit', [App\Http\Controllers\bookingController::class, 'edit']);
Route::patch('/booking/{id}', [App\Http\Controllers\bookingController::class, 'update']);
Route::delete('/booking/{id}', [App\Http\Controllers\bookingController::class, 'destroy']);