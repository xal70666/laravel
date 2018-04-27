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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/uploadfile', 'WebController@uploadfile')->name('uploadfile');
Route::post('/uploadfile', 'WebController@uploadfilepost')->name('uploadfilepost');

Auth::routes();

Route::get('/works-details', 'HomeController@workDetails')->name('works-details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
