<?php
Auth::routes();

Route::get('/', 'IndexController@index');

Route::get('articles', 'IndexController@articles');
Route::get('article/{id}', 'IndexController@info')->where('id', '[0-9]+');
Route::get('donate', 'IndexController@donate');

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth']],function() {
    Route::get('edit', 'UserController@edit');
    Route::get('personal', 'UserController@personal');

    Route::get('tools', 'ToolsController@tools');
    Route::post('get_data', 'SpiderController@getJinData')->name('get_data');
});

Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'],function(){
    Route::get('/', 'IndexController@index');
    Route::get('article', 'ArticleController@index');
    Route::get('edit_article', 'ArticleController@edit');
});



