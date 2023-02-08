<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Awards;

use UF\uFrag\Addons\Widget;

class Awards extends Widget
{
	protected function __info()
	{
		return [
			'title'       => 'Palmarès',
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'types'       => [
				'index'     => 'Derniers palmarès',
				'best_team' => 'Équipe la plus récompensée',
				'best_game' => 'Jeu le plus récompensé'
			]
		];
	}
}
