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
//首頁
Route::get('/','indexControl@index')->name('index');
//搜尋
Route::get('search','indexControl@search')->name('search');
//篩選功能
Route::get('select','indexControl@selection')->name('select');
//追蹤
Route::get('like','indexControl@like')->name('like');
//追蹤頁面
Route::get('favorite','indexControl@favorite')->name('favorite');
//取消追蹤
Route::get('unlike','indexControl@unlike')->name('unlike');
//餐廳資訊
Route::get('detail','indexControl@detail')->name('detail');