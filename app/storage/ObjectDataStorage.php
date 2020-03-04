<?php

namespace app\storage;


class ObjectDataStorage
{
	/**
	 * Storage for object.
	 *
	 * @var ObjectCollection
	 */
	private $collection;

	/**
	 * Hash of the last added object.
	 *
	 * @var string
	 */
	private $objectHash = "";


	public function __construct( ObjectCollection $collection )
	{
		$this->collection = $collection;
	}

	/**
	 * Adds an object inside the storage, and optionally
	 * associate it to some data.
	 *
	 * @param object $key
	 * @param string $data
	 *
	 * @return void
	 */
	public function add(object $key, string $data = null): void
	{
		$hash = $this->getHash($key);

		$storage = $this->collection->getStorage();

		if(isset($storage[$hash]))
		{
			return;
		}

		$storage[$hash] = array(
			'object' => $key,
			'data' => $data
		);

		$this->objectHash = $hash;

		$this->collection->setStorage($storage);
	}

	/**
	 * Removes the object from the storage.
	 *
	 * @param object $key
	 *
	 * @return void
	 */
	public function remove(object $key): void
	{
		$storage = $this->collection->getStorage();

		$hash = $this->getHash($key);

		unset($storage[$hash]);

		$this->collection->setStorage($storage);
	}

	/**
	 * This method calculates an identifier for the objects.
	 *
	 * @param object $object
	 *
	 * @return string
	 */
	public function getHash(object $object): string
	{
		return spl_object_hash($object);
	}

	/**
	 * Return last added object.
	 *
	 * @return object
	 */
	public function current(): object
	{
		$storage = $this->collection->getStorage();

		return $storage[$this->objectHash]['object'];
	}

	/**
	 * Return list of all added objects.
	 *
	 * @return array
	 */
	public function getObjectList(): array
	{
		$objects = [];

		$storage = $this->collection->getStorage();

		foreach ($storage as $item)
		{
			$objects[] = $item['object'];
		}

		return $objects;
	}

	/**
	 * Return true if object exist in the collection, false - if not.
	 *
	 * @param object $object
	 *
	 * @return bool
	 */
	public function check(object $object): bool
	{
		$storage = $this->collection->getStorage();

		foreach ($storage as $item)
		{
			if ($item['object'] == $object)
			{
				return true;
			}
		}

		return false;
	}
}