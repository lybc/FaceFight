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

Route::get('/', 'IndexController@index');
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', 'AuthController@register');
Route::get('/activeUser', 'AuthController@active');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/upload', function() {
    return view('uploads');
});
Route::get('/weixin', 'ImageController@weixinLogin');
