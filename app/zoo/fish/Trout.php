<?php

namespace app\zoo\fish;

use app\zoo\FactoryFish;

class Trout extends Fish
{
	protected $type = FactoryFish::TROUT;

	public function swimDeep()
	{
		return " Trout can swim at a depth of 50m";
	}
}