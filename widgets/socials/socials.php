<?php
/**
 * https://neofr.ag
 * @author: Jérémy VALENTIN <jeremy.valentin@neofr.ag>
 */

namespace UF\Widgets\Socials;

use UF\uFrag\Addons\Widget;

class Socials extends Widget
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('Réseaux sociaux'),
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Jérémy VALENTIN <jeremy.valentin@neofr.ag>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'depends'     => [
				'ufrag' => '0.0.1'
			]
		];
	}
}
