<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\About;

use UF\uFrag\Addons\Widget;

class About extends Widget
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('À propos'),
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'depends'     => [
				'ufrag' => '0.0.1'
			]
		];
	}
}
