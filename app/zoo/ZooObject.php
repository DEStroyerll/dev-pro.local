<?php

namespace app\zoo;

abstract class ZooObject
{
	protected $type;

	public function getType()
	{
		return $this->type;
	}
}