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

//註冊頁面
Route::get('register','memberControl@register')->name('register');
//會員註冊
Route::post('register','memberControl@regisdata')->name('register');
//註冊成功畫面
Route::get('authsuccess','memberControl@authsuccess')->name('authsuccess');

//會員登入畫面
Route::get('login','memberControl@login')->name('login');
//會員登入資料
Route::post('login','memberControl@logindata')->name('login');
//會員登出
Route::get('logout','memberControl@logout')->name('logout');
//會員資料編輯畫面
Route::get('memberedit','memberControl@memberedit')->name('memberedit');
//會員資料編輯
Route::post('memberedit','memberControl@membereditsave')->name('memberedit');

//餐廳相關畫面
Route::get('restaurantS','indexControl@restaurantS')->name('restaurantS');
//新增餐廳畫面
Route::get('restaurantcreate','indexControl@restaurantcreate')->name('restaurantcreate');
//新增餐廳
Route::post('restaurantcreate','indexControl@createdata')->name('restaurantcreate');
//新增餐廳成功
Route::get('createsuccess','indexControl@createsuccess')->name('createsuccess');
//刪除餐廳畫面
Route::get('restaurantdel','indexControl@restaurantdel')->name('restaurantdel');
//刪除餐廳
Route::get('deldata','indexControl@deldata')->name('deldata');
//更新餐廳畫面
Route::get('rupdate','indexControl@rupdate')->name('rupdate');
//更新餐廳
Route::post('rupdate','indexControl@upsave')->name('rupdate');

//評論頁面
Route::get('common','indexControl@common')->name('common');
//新增評論頁面
Route::get('newcommon','indexControl@newcommon')->name('newcommon');
//新增評論
Route::post('newcommon','indexControl@commonsave')->name('newcommon');
//新增評論成功
Route::get('cssuccess','indexControl@cssuccess')->name('cssuccess');

//超級使用者界面
Route::get('sudo','memberControl@sudo')->name('sudo');
//會員修改界面
Route::get('sudome','memberControl@sudome')->name('sudome');
//會員資料修改
Route::post('sudome','memberControl@sudomesave')->name('sudome');