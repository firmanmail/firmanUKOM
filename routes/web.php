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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'cekbarang'], function(){
    Route::get('index', 'CekbarangController@index')->name('backend.user.cekbarang.index');
    Route::get('create', 'CekbarangController@create')->name('backend.user.cekbarang.create');
});
Route::group(['prefix' => 'dashboard'], function(){
    Route::get('index', 'DashboardController@index')->name('backend.admin.dashboard.index');
});
Route::group(['prefix' => 'stock'], function(){
    Route::get('index', 'StockController@index')->name('backend.admin.stock.index');
});
Route::group(['prefix' => 'suplier'], function(){
    Route::get('index', 'SuplierController@index')->name('backend.admin.suplier.index');
});
Route::group(['prefix' => 'request'], function(){
    Route::get('index', 'RequestController@index')->name('backend.admin.request.index');
});