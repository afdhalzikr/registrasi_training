<?php

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
//Route::get('/', 'RegistrasiController@index')->name('pendaftaran');
Route::get('/', function () {
    return view('register.index');
});
Route::get('/volunteer', function () {
    return view('register.volunteer');
});
Route::get('/daftar', function () { return view('register.daftar'); })->name('daftar');
Route::post('/daftar/create', 'RegistrasiController@create')->name('DaftarCreate');
