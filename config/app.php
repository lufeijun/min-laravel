<?php


return [

	'timezone' => 'Asia/Shanghai',


	// Facades 用到的别名问题
	'aliases' => [
		'App' => Lufeijun1234\Facades\App::class,
		'Str' => Lufeijun1234\Support\Str::class,
		'Route' => Lufeijun1234\Facades\Route::class,
		'Request' => Lufeijun1234\Facades\Request::class,
		'Log' => Lufeijun1234\Facades\Log::class,
	],



	// 服务提供者
	'providers' => [
		App\Providers\AppServiceProvider::class,
		App\Providers\TestServiceProvider::class,

		App\Providers\RouteServiceProvider::class,

	],

];
