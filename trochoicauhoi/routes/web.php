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
    return view('layout');
});
Route::get('cau-hoi','CauHoiController@create');
Route::prefix('linhvuc')->group(function(){
	Route::get('/', 'LinhVucController@create')->name('linhvuc');
	Route::get('{id}','LinhVucController@show')->name('linhvuc.get');
	Route::post('{id}','LinhVucController@update')->name('linhvuc.capnhat');
});