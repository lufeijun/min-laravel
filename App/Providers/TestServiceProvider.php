<?php
namespace App\Providers;

use Lufeijun1234\Abstracts\Serviceprovider\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{


	public function register()
	{
		echo "provides register<br>";
	}


	public function boot()
	{
		echo "provides boot<br>";
	}

}
