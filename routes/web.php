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
    Route::resource('elektronik', 'ElektronikController');
    Route::resource('furnitur', 'FurniturController');

    Route::post('ganti-gambar/{id}', 'GambarController@updateImage')->name('update-image');
    Route::post('hapus-gambar/{id}', 'GambarController@deleteImage')->name('delete-image');
    Route::get('pindai', 'MainController@pindai')->name('pindai');
    
    Route::get('laporan', 'MainController@laporan')->name('laporan');
    Route::get('laporan/cetak', 'MainController@cetak')->name('cetak');
    
});

require __DIR__.'/auth.php';
