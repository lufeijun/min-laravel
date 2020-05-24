<?php


namespace App\Providers;

use Lufeijun1234\Abstracts\Serviceprovider\RouteServiceProvider as ServiceProvider;
use Lufeijun1234\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
	/**
	 * 控制器的命名空间
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';




	//
	public function map()
	{
		$this->mapApiRoutes();

		$this->mapWebRoutes();
	}


	protected function mapWebRoutes()
	{
		Route::middleware('web')
			->namespace($this->namespace)
			->group(base_path('routes/web.php'));
	}


	/**
	 * Define the "api" routes for the application.
	 *
	 * These routes are typically stateless.
	 *
	 * @return void
	 */
	protected function mapApiRoutes()
	{
		Route::prefix('api')
			->middleware('api')
			->namespace($this->namespace)
			->group(base_path('routes/api.php'));
	}


}
