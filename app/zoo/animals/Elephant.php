<?php

namespace app\zoo\animals;

use app\zoo\FactoryAnimals;

class Elephant extends Animal
{
	protected $type = FactoryAnimals::ELEPHANT;

	public function growls()
	{
		return " Elephant yells at 150%";
	}
}