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

// ログイン認証
Route::get('/', 'CustomerController@getIndex')->middleware('basicauth');

// URLをcustomerとしてグループ化
Route::group(['prefix' => 'customer'], function () {
    // 一覧
    Route::get('list', 'CustomerController@getIndex'); // 一覧表示

    // 登録
    Route::get('new', 'CustomerController@newIndex'); // 入力
    Route::patch('new', 'CustomerController@newConfirm'); // 確認
    Route::post('new', 'CustomerController@newFinish'); // 完了

    // 編集
    Route::get('edit/{id}/', 'CustomerController@editIndex'); // 編集
    Route::patch('edit/{id}/', 'CustomerController@editConfirm'); // 確認
    Route::post('edit/{id}/', 'CustomerController@editFinish'); // 完了

    // 詳細
    Route::get('detail/{id}/', 'CustomerController@detailIndex'); // 詳細

    // 削除
    Route::post('delete/{id}/', 'CustomerController@usDelete'); // 削除
});
