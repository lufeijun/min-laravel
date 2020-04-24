<?php


namespace App\Listeners;


use App\Events\OrderEvent;

class OrderListenerOne
{

	public function handle( OrderEvent $one )
	{
		echo  '事件listener ：'. $one->id;
	}
}
