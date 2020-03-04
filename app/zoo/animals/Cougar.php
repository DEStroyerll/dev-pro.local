<?php

namespace app\zoo\animals;

use app\zoo\FactoryAnimals;

class Cougar extends Animal
{
	protected $type = FactoryAnimals::COUGAR;
	
	public function growls()
	{
		return " Cougar growls 70%";
	}
}