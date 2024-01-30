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
Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/layout', function () {
    return view('layouts.layout_nav');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'destroy'])->name('logout');
Route::post('save', [App\Http\Controllers\HomeController::class, 'store'])->name('submit_data');
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
});// End




    Route::middleware('Isteacher')->group(function () {
        Route::prefix('teacher')->group(function () {
      Route::get('/dashboard-T',[\App\Http\Controllers\TeacherController::class, 'dashboard_T'])->name('dashboard-T');
      Route::get('/setting/electronic',[\App\Http\Controllers\TeacherController::class, 'tableElectronic'])->name('tableElectronic-T');
    
    
    });// End teacher
    });

});// Prevent Back Middleare