<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Fields;

class Serialized
{
	public function init($field)
	{
		$field->default('');
	}

	public function value($value)
	{
		if (is_a($value, 'UF\uFrag\Libraries\Array_'))
		{
			return $value;
		}

		return $value ? uFrag()->array(unserialize($value)) : uFrag()->array;
	}

	public function raw($value)
	{
		$convert = function(&$value) use (&$convert){
			if ((is_string($value) || is_object($value)) && method_exists($value, '__toArray'))
			{
				$value = $value->__toArray();

				array_walk($value, $convert);
			}
			else if (is_a($value, 'UF\uFrag\Libraries\Date'))
			{
				$value = $value->sql();
			}
		};

		$convert($value);

		return $value ? serialize($value) : '';
	}
}
