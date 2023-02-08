<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Events;

use UF\uFrag\Addons\Widget;

class Events extends Widget
{
	protected function __info()
	{
		return [
			'title'       => 'Événements',
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'depends'     => [
				'ufrag' => 'Alpha 0.2'
			],
			'types'       => [
				'index'       => 'Calendrier des événements',
				'types'       => 'Liste des types d\'événements',
				'events'      => 'Liste des événements',
				'event'       => 'Un événement en détail',
				'matches'     => 'Derniers résultats',
				'upcoming'    => 'Prochains matchs'
			]
		];
	}
}
