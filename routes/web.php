<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/upload', 'App\Http\Controllers\UploadController@upload')->name('upload');
Route::post('/store', 'App\Http\Controllers\UploadController@store')->name('store');
Route::post('/process', 'App\Http\Controllers\UploadController@process')->name('process');
Route::get('/list', 'App\Http\Controllers\UploadController@list')->name('list');


