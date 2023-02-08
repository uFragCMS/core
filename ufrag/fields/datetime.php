<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Fields;

class Datetime
{
	public function init($field)
	{
		$field->default(uFrag()->date()->sql());
	}

	public function value($value)
	{
		if ($value)
		{
			return uFrag()->date($value);
		}
	}

	public function raw($value)
	{
		if (is_a($value, 'UF\uFrag\Libraries\Date'))
		{
			$value = $value->sql();
		}

		return $value;
	}
}
