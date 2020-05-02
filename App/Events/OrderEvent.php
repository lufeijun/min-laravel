<?php


namespace App\Events;


class OrderEvent
{
   public $id;

	public function __construct( int $id = 123 )
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
}
