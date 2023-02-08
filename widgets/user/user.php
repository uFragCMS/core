<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\User;

use UF\uFrag\Addons\Widget;

class User extends Widget
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('Espace membre'),
			'description' => '',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'types'       => [
				'index'          => $this->lang('Espace membre'),
				'index_mini'     => $this->lang('Espace membre (mini)'),
				'messages_inbox' => $this->lang('Messagerie')
			]
		];
	}
}
