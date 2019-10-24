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
Route::get('/linh-vuc', 'LinhVucController@create');
Route::get('cau-hoi','CauHoiController@create');
Route::post('cau-hoi/{id}','CauHoiController@edit');
Route::get('/test/{id}',function($id){echo 'ID là: '.$id;
});