<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Libraries\Panels;

use UF\uFrag\Libraries\Panel;

class Back extends Panel
{
	private $_url;

	public function __invoke($url = '')
	{
		$this->_url = $url;
		return $this;
	}

	public function __toString()
	{
		return $this->panel()
					->style('card-transparent')
					->body($this->button_back($this->_url))
					->__toString();
	}
}
