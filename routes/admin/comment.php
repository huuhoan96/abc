<?php 
Route::get('/comment','CommentController@index')->name('comments');
Route::post('/comment','CommentController@changeStatus')->name('comments');
Route::get('/delete-comment/{id}','CommentController@delComment')->name('delComment');
 ?>