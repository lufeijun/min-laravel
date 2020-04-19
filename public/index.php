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


// 服务容器
$app->register( new \App\Providers\TestServiceProvider( $app ) );



echo "<br>finally";
