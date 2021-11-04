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

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'MainController@index')->name('home');
    Route::resource('kendaraan', 'KendaraanController');
    Route::get('pindai', 'MainController@pindai')->name('pindai');
    Route::get('laporan', 'MainController@laporan')->name('laporan');
    
});

require __DIR__.'/auth.php';
