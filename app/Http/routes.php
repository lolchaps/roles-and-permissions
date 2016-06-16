<?php

Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::auth();

	Route::get('/home', 'HomeController@index');
});

