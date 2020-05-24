<?php


Route::get('/', function () {
	echo "ok";

	return '111';
});


Route::get('/index', function () {
	echo "ok";
});


Route::prefix('prefix')->get('home2/{id}', 'HomeController@index');
Route::get('home1', 'HomeController@index');
