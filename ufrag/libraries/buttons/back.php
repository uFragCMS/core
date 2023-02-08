<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Libraries\Buttons;

use UF\uFrag\Library;

class Back extends Library
{
	public function __invoke($url = '', $title = '')
	{
		return $this->button()
					->title($title ?: $this->lang('Retour'))
					->url($this->url->back() ?: $url)
					->color('secondary');
	}
}
