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
    return view('auth.login');
});
Route::get('/layout', function () {
    return view('layouts.layout_nav');
});
Route::get('/test', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::prefix('EN-floors')->group(function () {
    Route::get('/back', [App\Http\Controllers\HomeController::class, 'back'])->name('back');
    Route::get('/floor-1', [App\Http\Controllers\HomeController::class, 'floor1'])->name('floor-1');
    Route::get('/floor-2', [App\Http\Controllers\HomeController::class, 'floor2'])->name('floor-2');
    Route::get('/floor-3', [App\Http\Controllers\HomeController::class, 'floor3'])->name('floor-3');
    Route::get('/floor-3/room-EN-1-308', [App\Http\Controllers\HomeController::class, 'room_EN_1_308'])->name('room-EN-1-308');
    Route::get('/floor-3/room-EN-1-307', [App\Http\Controllers\HomeController::class, 'room_EN_1_307'])->name('room-EN-1-307');
    Route::get('/floor-3/room-EN-1-306', [App\Http\Controllers\HomeController::class, 'room_EN_1_306'])->name('room-EN-1-306');
    Route::get('/floor-4', [App\Http\Controllers\HomeController::class, 'floor4'])->name('floor-4');
    Route::get('/floor-5', [App\Http\Controllers\HomeController::class, 'floor5'])->name('floor-5');
    Route::get('/room-EN-1-102', [App\Http\Controllers\HomeController::class, 'room_EN_1_102'])->name('room-EN-1-102');
});
