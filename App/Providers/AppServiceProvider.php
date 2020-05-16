<?php


namespace App\Providers;


use Lufeijun1234\Abstracts\Serviceprovider\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function register()
	{
		//
		echo ' app  register<br>';
	}


	public function boot()
	{
		echo ' app  boot<br>';
	}

}
