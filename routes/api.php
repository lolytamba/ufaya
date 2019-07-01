<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Detail Bahan Baku
Route::get('/detail_bahan_baku', 'DetailBahanBakuController@index');
Route::post('/detail_bahan_baku/store', 'DetailBahanBakuController@store');
Route::get('/detail_bahan_baku/{id}', 'DetailBahanBakuController@showbyID');
Route::patch('/detail_bahan_baku/update/{id}', 'DetailBahanBakuController@update'); 
Route::delete('/detail_bahan_baku/delete/{id}', 'DetailBahanBakuController@destroy');

//Detail TKL
Route::get('/detail_tkl', 'DetailTKLController@index');
Route::post('/detail_tkl/store', 'DetailTKLController@store');
Route::get('/detail_tkl/{id}', 'DetailTKLController@showbyID');
Route::patch('/detail_tkl/update/{id}', 'DetailTKLController@update'); 
Route::delete('/detail_tkl/delete/{id}', 'DetailTKLController@destroy');

//Detail TKTL
Route::get('/detail_tktl', 'DetailTKTLController@index');
Route::post('/detail_tktl/store', 'DetailTKTLController@store');
Route::get('/detail_tktl/{id}', 'DetailTKTLController@showbyID');
Route::patch('/detail_tktl/update/{id}', 'DetailTKTLController@update'); 
Route::delete('/detail_tktl/delete/{id}', 'DetailTKTLController@destroy');

//Detail Overhead
Route::get('/detail_overhead', 'DetailOverheadController@index');
Route::post('/detail_overhead/store', 'DetailOverheadController@store');
Route::get('/detail_overhead/{id}', 'DetailOverheadController@showbyID');
Route::patch('/detail_overhead/update/{id}', 'DetailOverheadController@update'); 
Route::delete('/detail_overhead/delete/{id}', 'DetailOverheadController@destroy');

//Detail Aktivitas
Route::get('/detail_aktivitas', 'DetailAktivitasController@index');
Route::post('/detail_aktivitas/store', 'DetailAktivitasController@store');
Route::get('/detail_aktivitas/{id}', 'DetailAktivitasController@showbyID');
Route::patch('/detail_aktivitas/update/{id}', 'DetailAktivitasController@update'); 
Route::delete('/detail_aktivitas/delete/{id}', 'DetailAktivitasController@destroy');

//Detail Bahan Penolong
Route::get('/detail_bahan_penolong', 'DetailBahanPenolongController@index');
Route::post('/detail_bahan_penolong/store', 'DetailBahanPenolongController@store');
Route::get('/detail_bahan_penolong/{id}', 'DetailBahanPenolongController@showbyID');
Route::patch('/detail_bahan_penolong/update/{id}', 'DetailBahanPenolongController@update'); 
Route::delete('/detail_bahan_penolong/delete/{id}', 'DetailBahanPenolongController@destroy');

//Pemesanan
Route::get('/pemesanans', 'PemesananController@index');
Route::post('/pemesanans/store', 'PemesananController@store');
Route::get('/pemesanans/{id}', 'PemesananController@showbyID');
Route::patch('/pemesanans/update/{id}', 'PemesananController@update'); 
Route::delete('/pemesanans/delete/{id}', 'PemesananController@destroy');