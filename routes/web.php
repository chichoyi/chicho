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
    return view('show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('get_data', 'SpiderController@getJinData')->name('get_data');
Route::get('chicho', function (){
    return view('chicho');
});
