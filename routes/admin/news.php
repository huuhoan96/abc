<?php 
// route tin tức dự án
Route::get('/news-project','NewsController@news_project')->name('news_project');
Route::get('/create-project','NewsController@create_project')->name('create_project');
Route::post('/create-project','NewsController@post_project')->name('create_project');
Route::get('/delete-roject/{id}','NewsController@delProject')->name('delProject');
// route tin tức
Route::get('/news','NewsController@index')->name('news');
Route::get('/add-news','NewsController@addNews')->name('addNews');
Route::post('/add-news','NewsController@postAddNews')->name('addNews');
Route::get('/edit-news/{id}','NewsController@editNews')->name('editNews');
Route::post('/edit-news/{id}','NewsController@postEditNews')->name('editNews');
Route::get('/delete-news/{id}','NewsController@deleteNews')->name('deleteNews');

// route danh mục tin tức
Route::get('/news-category','NewsController@news_category')->name('news_category');
Route::post('/news-category','NewsController@post_news_category')->name('news_category');
Route::get('/delete-news-category/{id}','NewsController@deleteCate')->name('deleteCate');
Route::get('/edit-news-category/{id}','NewsController@editCate')->name('editCate');
Route::post('/edit-news-category/{id}','NewsController@postEditCate')->name('editCate');

 ?>