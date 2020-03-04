<?php


namespace app\storage;


class ObjectCollection
{
	protected $storage = [];

	/**
	 * @return array
	 */
	public function getStorage(): array
	{
		return $this->storage;
	}

	/**
	 * @param array $storage
	 */
	public function setStorage( array $storage )
	{
		$this->storage = $storage;
	}
}