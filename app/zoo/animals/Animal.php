<?php

namespace app\zoo\animals;

use app\zoo\ZooObject;

abstract class Animal extends ZooObject
{
	public abstract function growls();
}