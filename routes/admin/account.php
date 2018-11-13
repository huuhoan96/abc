<?php 
Route::resource('posts','Account_groupController');
Route::post('posts/changeStatus', array('as' => 'changeStatus', 'uses' => 'Account_groupController@changeStatus'));

// route account group
Route::get('/account-group','Account_groupController@account_group')->name('account_group');
Route::post('/account-group/add','Account_groupController@addUserGroup')->name('addUserGroup');
Route::get('/account-group/delete-group/{id}','Account_groupController@deleteGroup')->name('deleteGroup');
Route::get('/account-group/edit-group/{id}','Account_groupController@editGroup')->name('editGroup');
Route::post('/account-group/edit-group/{id}','Account_groupController@postEditGroup')->name('editGroup');
// Route account 
Route::get('/account','AccountController@index')->name('account');
Route::post('/add-account','AccountController@addAccount')->name('addAccount');
Route::get('/delete-account/{id}','AccountController@deleteAccount')->name('deleteAccount');
Route::get('/edit-account/{id}','AccountController@editAccount')->name('editAccount');
Route::post('/edit-account/{id}','AccountController@postEditAccount')->name('editAccount');
Route::get('/info-account','AccountController@infoAccount')->name('infoAccount');
Route::post('/info-account/change-password','AccountController@changePassword')->name('changePassword');
 ?>