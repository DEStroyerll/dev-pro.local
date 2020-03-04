<?php

namespace app\zoo;

interface ZooObjectCreator
{
	public static function create(string $type): ?ZooObject;
}