<?php

class ArrayAccessExample implements ArrayAccess
{
	private $container = [];

	public function __construct()
	{
		$this->container = [
			"one" => 1 ,
			"two" => 12 ,
			"three" => 1 ,
		];
	}

	/**
	 * Auth        : NiuJunQing
	 * Create      : 2019/5/8 10:23
	 * Description : 设置偏移值
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset , $value)
	{
		if (is_null($offset)) {
			$this->container[] = $value;
		} else {
			$this->container[$offset] = $value;
		}
	}

	/**
	 * Auth        : NiuJunQing
	 * Create      : 2019/5/8 10:25
	 * Description : 得到指定键的值, 没有则为NULL
	 * @param mixed $offset
	 * @return mixed|null
	 */
	public function offsetGet($offset)
	{
		return isset($this->container[$offset]) ? $this->container[$offset] : NULL;
	}

	/**
	 * Auth        : NiuJunQing
	 * Create      : 2019/5/8 10:26
	 * Description : 删除掉指定键的值
	 * @param mixed $offset
	 */
	public function offsetUnset($offset)
	{
		unset($this->container[$offset]);
	}

	/**
	 * Auth        : NiuJunQing
	 * Create      : 2019/5/8 10:27
	 * Description : 检查指定的键是否存在
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists($offset)
	{
		return isset($this->container[$offset]);
	}
}
