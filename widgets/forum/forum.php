<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Forum;

use UF\uFrag\Addons\Widget;

class Forum extends Widget
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('Forum'),
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'depends'     => [
				'ufrag' => 'Alpha 0.2'
			],
			'types'       => [
				'index'      => $this->lang('Derniers messages'),
				'topics'     => $this->lang('Derniers sujets'),
				'statistics' => $this->lang('Statistiques'),
				'activity'   => $this->lang('Activité')
			]
		];
	}
}
