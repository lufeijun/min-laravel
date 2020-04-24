<?php


namespace App\Events;


class OrderEvent
{
   public $id;

	public function __construct( int $id )
	{
		$this->id = $id;
	}
}
