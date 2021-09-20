<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/book',[App\Http\Controllers\ReservationController::class, 'form'])->name('reservation.form');
Route::post('/book',[App\Http\Controllers\ReservationController::class, 'reserve'])->name('reservation.reserve');

Route::prefix('admin')->group( function (){	
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin')->middleware('is_admin');
    Route::resource('/user',App\Http\Controllers\Admin\UserController::class);
    Route::get('/reservation',[App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('reservation.index');
    Route::post('/reservation/{id}',[App\Http\Controllers\Admin\ReservationController::class, 'status'])->name('reservation.status');
    Route::delete('/reservation{id}',[App\Http\Controllers\Admin\ReservationController::class, 'destory'])->name('reservation.destory');

});