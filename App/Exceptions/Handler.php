<?php


namespace App\Exceptions;

use Lufeijun1234\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

/**
 * 提供了自定义操作的便利性，即扩展性
 * Class Handler
 * @package App\Exceptions
 */
class Handler extends ExceptionHandler
{
	protected $dontReport = [
		//
	];


	protected $dontFlash = [
		'password',
		'password_confirmation',
	];

	/**
	 * Report or log an exception.
	 *  上报       日志
	 * @param  \Throwable  $exception
	 * @return void
	 *
	 * @throws \Exception
	 */
	public function report(Throwable $exception)
	{
		// 可以处理自己的逻辑，ex：发报错邮件等等


		parent::report($exception);
	}

	/**
	 * Render an exception into an HTTP response.
	 *   渲染一个 response 响应
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Throwable  $exception
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 * @throws \Throwable
	 */
	public function render($request, Throwable $exception)
	{
		// 可以处理自己的逻辑，ex：发报错邮件等等

		return parent::render($request, $exception);
	}
}
