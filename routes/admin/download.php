<?php 
	Route::get('download','DownloadController@index')->name('download');
	Route::post('download','DownloadController@add')->name('download');
	Route::get('edit-download/{id}','DownloadController@editDownload')->name('editDownload');
	Route::post('edit-download/{id}','DownloadController@PostEditDownload')->name('editDownload');
	Route::get('delete-download/{id}','DownloadController@delete')->name('deleteDownload');
	Route::post('/download/update-download/{id}','DownloadController@updateDownload')->name('update-download');
?>