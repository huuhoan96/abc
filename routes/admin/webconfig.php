<?php 
	Route::get('web-config','WebConfigController@index')->name('webConfig');
	Route::post('web-config','WebConfigController@save')->name('saveConfig');
?>