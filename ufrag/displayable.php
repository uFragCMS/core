<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag;

use UF\uFrag\Libraries\Array_ as Array_;

abstract class Displayable extends Array_
{
	protected $_id;

	public function __construct()
	{
		parent::__construct(uFrag());
	}

	public function id($id)
	{
		$this->_id = $id;
		return $this;
	}
}
