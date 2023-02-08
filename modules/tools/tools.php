<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Tools;

use UF\uFrag\Addons\Module;

class Tools extends Module
{
	protected function __info()
	{
		return [
			'title'       => 'Tools',
			'description' => '',
			'icon'        => 'fas fa-wrench',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>'
		];
	}
}
