<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','website@getIndex');
Route::get('{url}','MaintextController@getIndex');