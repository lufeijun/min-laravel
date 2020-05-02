<?php

/**
 * min-Laravel - A PHP Framework For Web Artisans
 *
 * @package  min-Laravel
 * @author   lufeijun1234 <lufeijun_1234@126.com>
 */

use Facades\App\Events\OrderEvent;

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


// 解析出 http 请求处理内核
$kernel = $app->make(Lufeijun1234\Contracts\Http\KernelContract::class);


echo '<pre>';


$response = $kernel->handle( Lufeijun1234\Http\Request::capture() );





var_dump(Str::contains("hellow", 'he'));


echo( App::make("config")->get('app.timezone') );

echo "<hr>";

$a = new OrderEvent(1);


echo OrderEvent::getId();



echo '<hr>';


echo "<br>finally";
