<?php

namespace app\zoo;

use app\zoo\fish\Shark;
use app\zoo\fish\Trout;

class FactoryFish implements ZooObjectCreator
{

	public const SHARK = "Shark";

	public const TROUT = "Trout";

	public static function create( string $type ): ?ZooObject
	{
		switch ( $type )
		{
			case self::SHARK:
				return new Shark();
				break;
			case self::TROUT:
				return new Trout();
				break;
			default:
				return null;
		}
	}
}