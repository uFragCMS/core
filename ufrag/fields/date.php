<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Fields;

class Date extends DateTime
{
	public function raw($value)
	{
		return substr(parent::raw($value), 0, 10);
	}
}
