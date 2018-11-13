<?php 
Route::get('document', 'DocumentController@myPost')->name('document');
Route::get('document/edit/{id}', 'DocumentController@edit')->name('document_edit');
Route::get('document/trash', 'DocumentController@trash')->name('trash');
Route::get('document/undo/{id}', 'DocumentController@undo')->name('undo');
Route::get('document/delete-pro/{id}', 'DocumentController@deletePro')->name('deletePro');
Route::resource('post','DocumentController');

// route import file document
Route::get('document/import-document', 'DocumentController@importdocument')->name('importdocument');
Route::post('/import-parse', 'DocumentController@parseImport')->name('import_parse');
Route::post('/import-process', 'DocumentController@processImport')->name('import_process');

// route insert thông tin sản phẩm
Route::get('insert-document','DocumentController@insertdocument')->name('insertdocument');
Route::post('insert-document','DocumentController@postInsertdocument')->name('insertdocument');


// Route::get('/','DocumentController@myPost');
Route::get('/search','DocumentController@search')->name('search');


Route::get('/live-search/action', 'DocumentController@action')->name('live_search.action');

// route yêu cầu báo giá
Route::get('document/quotes-document', 'DocumentController@quotesdocument')->name('quotesdocument');

 ?>