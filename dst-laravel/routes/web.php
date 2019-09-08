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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/', 'TestController@index');
Route::get('mahasiswa/', 'MahasiswaController@index');
Route::get('mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('mahasiswa/', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::put('mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::delete('mahasiswa/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

Auth::routes();

Route::get('mahasiswa/home', 'HomeController@index');