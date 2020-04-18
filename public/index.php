<?php

/**
 * min-Laravel - A PHP Framework For Web Artisans
 *
 * @package  min-Laravel
 * @author   lufeijun1234 <lufeijun_1234@126.com>
 */

define('LARAVEL_START', microtime(true));

/**
 * 引入自动加载文件
 */
require __DIR__.'/../vendor/autoload.php';

echo "<pre>";

/**
 * 获取 app 类，这个类是整个系统的核心类
 */
$app = require_once __DIR__.'/../bootstrap/app.php';



// 服务容器测试

class aaa {
	public $name = '121';
	public $age = 12;
}

class bbb {
	public $name = '121';
	public $age = 12;
	public $a;

	public function __construct( aaa $a )
	{
		$this->a = $a;
	}
}


$app->bind(
	Illuminate\Contracts\Http\Kernel::class,
	aaa::class
);


$app->bind(
	'bbb',
	bbb::class
);


//$a1 = $app->make( Illuminate\Contracts\Http\Kernel::class );
//
//
//$a2 = $app->make( Illuminate\Contracts\Http\Kernel::class );
//
//$a2->name = "dasd";
//var_dump( $a2 );
//var_dump( $a1 );

$b = $app->make( 'bbb' );
var_dump( $b );


var_dump( $app );

var_dump( $app->make('app') );
var_dump( $app->make( Lufeijun1234\Foundation\Application::class ) );




echo "<br>finally";
