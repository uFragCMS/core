<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag;

abstract class Core extends uFrag
{
	static protected $_callbacks = [];

	protected function on($event, $callback)
	{
		static::$_callbacks[$event][] = $callback;
		return $this;
	}

	protected function trigger($event, &...$args)
	{
		if (isset(static::$_callbacks[$event]))
		{
			foreach (static::$_callbacks[$event] as $callback)
			{
				call_user_func_array($callback, $args);
			}

			unset(static::$_callbacks[$event]);
		}

		return $this;
	}
}
