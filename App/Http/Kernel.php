<?php


namespace App\Http;
use Lufeijun1234\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
	/**
	 * The application's global HTTP middleware stack.
	 *   http 请求中间件
	 * These middleware are run during every request to your application.
	 *
	 * @var array
	 */
	protected $middleware = [
	];


	/**
	 * The application's route middleware groups.
	 *  路由中间件组
	 * @var array
	 */
	protected $middlewareGroups = [
		'web' => [

		],

		'api' => [

		],
	];


	/**
	 * The application's route middleware.
	 *  路由中间件
	 * These middleware may be assigned to groups or used individually.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [

	];
}
