<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Libraries\Forms;

use UF\uFrag\Library;

class Info extends Library
{
	protected $_content;

	public function __invoke($content)
	{
		$this->_content = $content;
		return $this;
	}

	public function __toString()
	{
		return (string)$this->_content;
	}
}
