<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Fields;

class Primary
{
	public function init($field)
	{
		if (!$field->is_text() && !$field->is_depends())
		{
			$field->int();
		}
	}
}
