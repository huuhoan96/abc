<?php 
Route::get('product', 'ProductController@myPost')->name('product');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product_edit');
Route::get('product/trash', 'ProductController@trash')->name('trash');
Route::get('product/undo/{id}', 'ProductController@undo')->name('undo');
Route::get('product/delete-pro/{id}', 'ProductController@deletePro')->name('deletePro');
Route::resource('post','ProductController');

// route import file csv
Route::get('product/import-product', 'ProductController@importProduct')->name('importProduct');
Route::post('/import-parse', 'ProductController@parseImport')->name('import_parse');
Route::post('/import-process', 'ProductController@processImport')->name('import_process');

// route insert thông tin sản phẩm
Route::get('insert-product','ProductController@insertProduct')->name('insertProduct');
Route::post('insert-product','ProductController@postInsertProduct')->name('insertProduct');


// Route::get('/','ProductController@myPost');
Route::get('/search','ProductController@search')->name('search');


Route::get('/live-search/action', 'ProductController@action')->name('live_search.action');

// route yêu cầu báo giá
Route::get('product/quotes-product', 'ProductController@quotesProduct')->name('quotesProduct');

// Route::post('order-pro','ProductController@order')->name('product');
// Route::get('/product','ProductController@product')->name('product');
// Route::post('/add-product','ProductController@addProduct')->name('addProduct');
 ?>