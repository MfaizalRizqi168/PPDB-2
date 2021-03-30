<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::resource('siswa', 'SiswaController');
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/laporan', 'AdminController@cetak_laporan')->name('admin.laporan');
});
