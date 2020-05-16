<?php
namespace App\Providers;

use Lufeijun1234\Abstracts\Serviceprovider\ServiceProvider;
use Lufeijun1234\Abstracts\Serviceprovider\DeferrableProvider;

class TestServiceProvider extends ServiceProvider implements DeferrableProvider
{


	public function register()
	{
		echo "provides register<br>";

		$this->app->singleton('testService', function (){
			return function (){
				echo "test register";
			};
		});

	}


	public function boot()
	{
		echo "provides boot<br>";
	}


	public function provides()
	{
		return ['testService'];
	}

}
