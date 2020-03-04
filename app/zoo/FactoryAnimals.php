<?php

namespace app\zoo;

use app\zoo\animals\Cat;
use app\zoo\animals\Lion;
use app\zoo\animals\Cougar;
use app\zoo\animals\Elephant;

class FactoryAnimals implements ZooObjectCreator
{
	public const COUGAR = "Cougar";

	public const CAT = "Cat";

	public const LION = "Lion";

	public const ELEPHANT = "Elephant";


	/**
	 * @param string $type
	 *
	 * @return ZooObject|null
	 */
	public static function create( string $type ): ?ZooObject
	{
		switch ( $type )
		{
			case self::COUGAR:
				return new Cougar();
				break;
			case self::CAT:
				return new Cat();
				break;
			case self::LION:
				return new Lion();
				break;
			case self::ELEPHANT:
				return new Elephant();
				break;
			default:
				return null;
		}
	}
}