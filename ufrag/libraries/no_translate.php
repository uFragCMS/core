<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Libraries;

use UF\uFrag\Library;

class No_Translate extends Library
{
	protected $_value;

	public function __invoke($value)
	{
		$this->_value = $value;
		return $this;
	}

	public function __toString()
	{
		return (string)$this->_value;
	}
}
