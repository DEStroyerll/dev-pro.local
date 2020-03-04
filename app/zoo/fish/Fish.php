<?php

namespace app\zoo\fish;

use app\zoo\ZooObject;

abstract class Fish extends ZooObject
{
	public abstract function swimDeep();
}