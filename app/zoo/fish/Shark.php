<?php

namespace app\zoo\fish;

use app\zoo\FactoryFish;

class Shark extends Fish
{
	protected $type = FactoryFish::SHARK;

	public function swimDeep()
	{
		return " Shark can swim at a depth of 2000m";
	}
}