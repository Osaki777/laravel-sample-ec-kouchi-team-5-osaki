<?php

// ユーザー認証関連
Auth::routes();

// プロフィール詳細
Route::resource('users', 'UserController')->only(['show']);

// トップページ
Route::get('/', 'Market')->name('top');
// いずれ分けるかもしれないが現時点ではトップページが一覧を兼ねる。
Route::get('/items', 'Market');

// 商品 詳細 / 追加 / 編集
Route::resource('items', 'ItemController');

Route::get('/admin', 'Admin')->name('admin');

// 以下で商品ページのテンプレートを表示
// Route::get('/test', function(){
//     return view('items.show');
// });