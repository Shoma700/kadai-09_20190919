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

Route::group(['prefix' => 'admin'], function(){
    Route::get('news/create', 'Admin\NewsController@add');
});


//【課題】PHP/Laravel 09 Routingについて理解する
//
//課題3
//「http://XXXXXX.jp/XXX というアクセスが来たときに、
// AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
   Route::get('XXX', 'AAAController@bbb'); 

//課題4
//【応用】 前章でAdmin/ProfileControllerを作成し、
// add Action, edit Actionを追加しました。web.phpを編集して、
// admin/profile/create にアクセスしたら ProfileController の add Action に、
// admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。
Route::group(['perfix' => 'admin/profile'],function(){
    Route::get('create', 'Admin/ProfileController@add');
    Route::get('edit', 'Admin/ProfileController@edit');
});

//以上です
