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

// Route untuk TIM
Route::get('/tim', 'TimController@index');
Route::post('/tim/create', 'TimController@create');
Route::get('/tim/{id}/edit', 'TimController@edit');
Route::post('/tim/{id}/update', 'TimController@update');
Route::get('/tim/{id}/hapus', 'TimController@hapus');

//Route untuk pemain
Route::get('/pemain', 'PemainController@indexPemain');
Route::post('/pemain/create', 'PemainController@create');
Route::get('/pemain/{id}/edit', 'PemainController@edit');
Route::post('/pemain/{id}/update', 'PemainController@update');
Route::get('/pemain/{id}/hapus', 'PemainController@hapus');

//Route untuk jadwal pertandingan
Route::get('/pertandingan', 'JadwalPertandinganController@indexJadwal');
Route::post('/pertandingan/create', 'JadwalPertandinganController@create');
Route::get('/pertandingan/{id}/edit', 'JadwalPertandinganController@edit');
Route::post('/pertandingan/{id}/update', 'JadwalPertandinganController@update');
Route::get('/pertandingan/{id}/hapus', 'JadwalPertandinganController@hapus');

//Route untuk hasil pertandingan
Route::get('/hasil', 'HasilPertandinganController@indexHasil');
Route::post('/hasil/create', 'HasilPertandinganController@create');
Route::get('/hasil/{id}/edit', 'HasilPertandinganController@edit');
Route::post('/hasil/{id}/update', 'HasilPertandinganController@update');
Route::get('/hasil/{id}/hapus', 'HasilPertandinganController@hapus');