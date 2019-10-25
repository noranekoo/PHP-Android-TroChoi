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

Route::get('/',function(){
	return view('layout');
});
Route::get('cau-hoi','CauHoiController@create');
Route::prefix('linh-vuc')->group(function(){
	Route::prefix('thung-rac')->group(function(){
		Route::get('','LinhVucController@onlyTrashed')->name('linhvuc.thungrac');
		Route::get('/khoi-phuc/{id}','LinhVucController@restore');
		Route::get('/xoa/{id}','LinhVucController@forceDelete');
	});
	Route::get('/them-moi',function(){
		return view('them-moi-linh-vuc');
	})->name('linhvuc.themmoi');
	Route::get('/', 'LinhVucController@create')->name('linhvuc');
	Route::get('/{id}','LinhVucController@show')->name('linhvuc.get');
	Route::get('xoa/{id}','LinhVucController@Delete');
	Route::post('/{id}','LinhVucController@update')->name('linhvuc.capnhat');
	Route::post('','LinhVucController@store')->name('linhvuc.themmoipost');
});