<?php 
Route::get('partners','PartnersController@index')->name('partners');
Route::get('add-partner','PartnersController@addPartner')->name('addPartner');
Route::post('add-partner','PartnersController@postAddPartner')->name('addPartner');
Route::get('delete-partner/{id}','PartnersController@deletePartner')->name('deletePartner');
Route::get('edit-partner/{id}','PartnersController@editPartner')->name('editPartner');
Route::post('edit-partner/{id}','PartnersController@postEditPartner')->name('editPartner');
 ?>