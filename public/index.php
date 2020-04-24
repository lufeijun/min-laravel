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

$event  = $app->make("events");


//// 绑定事件名称 和 闭包函数
$event->listen('order',function( $a , $b ){
	echo "<hr>";
	echo $a, "<br>";
	echo $b, "<br>";
	echo "<hr>";
});
// 字符串名称触发
$event->dispatch("order",[1,11,22]);


// 绑定事件名称 和 类字符串
$event->listen(App\Events\OrderEvent::class,App\Listeners\OrderListenerOne::class);
$one = new App\Events\OrderEvent(1);
$event->dispatch($one,[1,11,22]);


echo "<br>finally";
