<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Fields;

class Float_
{
	public function init($field)
	{
		$field->default(0);
	}

	public function value($value)
	{
		return (float)$value;
	}

	public function raw($value)
	{
		return (float)$value;
	}
}
