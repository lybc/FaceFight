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

//Route::get('/', 'IndexController@index')->name('index');
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', 'AuthController@register');
Route::get('/activeUser', 'AuthController@active');
Route::post('/upload', 'ImageController@receive')->name('handle-file-upload');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', 'AuthController@login');

Route::get('/upload', function() {
    return view('uploads');
});
Route::get('/weixin', 'ImageController@weixinLogin');
Route::get('/', function () {
    return view('main-list');
});

Route::get('add-post', function () {
    return view('post.add_or_edit');
});

Route::get('detail', function () {
    return view('item-detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
