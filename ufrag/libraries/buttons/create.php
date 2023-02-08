<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Libraries\Buttons;

use UF\uFrag\Library;

class Create extends Library
{
	public function __invoke($url = '', $title = '', $icon = 'fas fa-plus')
	{
		return $this->button()
					->title($title)
					->url($url)
					->icon($icon)
					->color('primary');
	}
}
