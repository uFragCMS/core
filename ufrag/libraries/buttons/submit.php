<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Libraries\Buttons;

use UF\uFrag\Libraries\Button;

class Submit extends Button
{
	public function __invoke($title = '', $color = 'primary')
	{
		parent::__invoke();

		$this->_template[] = function(&$content, &$attrs, &$tag){
			$attrs['type'] = 'submit';
			$tag = 'button';
		};

		return $this->title($title ?: $this->lang('Valider'))
					->color($color);
	}
}
