<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Members;

use UF\uFrag\Addons\Widget;

class Members extends Widget
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('Membres'),
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'depends'     => [
				'ufrag' => 'Alpha 0.2'
			],
			'types'       => [
				'index'       => $this->lang('Derniers membres'),
				'online'      => $this->lang('Qui est en ligne ?'),
				'online_mini' => $this->lang('Qui est en ligne ? (mini)')
			]
		];
	}
}
