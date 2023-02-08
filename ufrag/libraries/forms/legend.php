<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Libraries\Forms;

use UF\uFrag\Library;

class Legend extends Library
{
	protected $_label;

	public function __invoke($label, $icon = '')
	{
		$this->_label = is_a($label, 'UF\uFrag\Libraries\Label') ? $label : $this->label($label, $icon);
		return $this;
	}

	public function __toString()
	{
		return '<legend>
					<div class="form-legend">
						'.$this->_label.'
					</div>
				</legend>';
	}
}
