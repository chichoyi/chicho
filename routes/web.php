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

Route::get('admin/login', 'Admin\LoginController@showLogin');
Route::post('admin/login', 'Admin\LoginController@login');
Route::group(['prefix' => 'admin' , 'namespace' => 'Admin','middleware'=>['auth.admin']],function(){
    Route::get('/', 'IndexController@index');
    Route::post('/ajax_ret', 'IndexController@ajaxRet');
    Route::get('/article', 'ArticleController@index');
    Route::get('/edit_article', 'ArticleController@edit');
    Route::post('/article', 'ArticleController@add');
    Route::get('/images', 'ImagesController@images');
    Route::get('/images_list', 'ImagesController@imagesList');
    Route::get('/upload_image', 'ImagesController@showUpload');
    Route::post('/upload_image', 'ImagesController@upload');
    Route::get('/tags', 'TagsController@tags');
    Route::get('/edit_tag', 'TagsController@showEdit');
    Route::post('/logout', 'LoginController@logout');
});



