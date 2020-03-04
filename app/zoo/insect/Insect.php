<?php

namespace app\zoo\animals;

use app\zoo\ZooObject;

abstract class Insect extends ZooObject
{
	public abstract function sting();
}