<?php


Route::get('/', function () {

//	throw new Exception('开始异常');

//	echo 1/0;

	return '111';
});


Route::get('/index', function () {
	echo "ok";
});


Route::prefix('prefix')->get('home2/{id}', 'HomeController@index');
Route::get('home1', 'HomeController@index');
