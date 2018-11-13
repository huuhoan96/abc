<?php 
Route::get('supporter', 'SupportController@index')->name('supporter');
Route::post('supporter', 'SupportController@add')->name('supporter');
Route::get('supporter-delete/{id}', 'SupportController@delSup')->name('delSup');
Route::get('supporter-edit/{id}', 'SupportController@editSup')->name('editSup');
Route::post('supporter-edit/{id}', 'SupportController@postEditSup')->name('editSup');
 ?>