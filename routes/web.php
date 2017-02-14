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
    return view('upload');
});

Route::get('/upload', function() {
    $upload = new \App\Module\Upload\QiNiu();
//    echo asset('QQ图片20161017184259.jpg');
    $upload->upload(public_path('PAL-国家开单量图 (1).png'));
});
