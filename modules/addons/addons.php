<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Addons;

use UF\uFrag\Addons\Module;

class Addons extends Module
{
	protected function __info()
	{
		return [
			'title'       => 'Thèmes & Addons',
			'description' => '',
			'icon'        => 'fas fa-puzzle-piece',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'admin'       => FALSE,
			'routes'      => [
				'admin/{url_title}/{id}/{url_title}' => '_action'
			]
		];
	}
}
