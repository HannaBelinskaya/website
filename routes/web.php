<?php

Auth::routes();
Route::get('category/(id)','CategoryController@getIndex');
Route::grop(['middleware' =>['lang']],function(){
Route::get('/','BaseController@getIndex');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','BaseController@getIndex');
Route::get('{url}','MaintextController@getIndex');