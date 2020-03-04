<?php

namespace app\zoo\animals;

use app\zoo\FactoryAnimals;

class Lion extends Animal
{
	protected $type = FactoryAnimals::LION;

	public function growls()
	{
		return " Leo growls 100%";
	}
}