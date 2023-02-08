<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Recruits;

use UF\uFrag\Addons\Widget;

class Recruits extends Widget
{
	protected function __info()
	{
		return [
			'title'       => 'Recrutement',
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'depends'     => [
				'ufrag' => 'Alpha 0.2'
			],
			'types'       => [
				'index'   => 'Dernières annonces',
				'recruit' => 'Une annonce en détail'
			]
		];
	}
}
