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

Route::get('/','OrderController@index')->name('order.terkirim');
Route::get('/import','ExcelController@index')->name('import');
Route::post('/order','OrderController@update')->name('update.order');
Route::post('/import','ExcelController@store')->name('import.excel');
Route::get('/order','OrderController@show')->name('order');
Route::get('/produk','ProdukController@index')->name('produk');
