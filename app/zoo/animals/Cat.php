<?php

namespace app\zoo\animals;

use app\zoo\FactoryAnimals;

class Cat extends Animal
{
	protected $type = FactoryAnimals::CAT;

	public function growls()
	{
		return " The cat purrs by 25%";
	}
}