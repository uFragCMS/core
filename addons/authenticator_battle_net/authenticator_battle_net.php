<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Addons\Authenticator_Battle_Net;

use UF\uFrag\Addons\Authenticator;

class Authenticator_Battle_Net extends Authenticator
{
	protected function __info()
	{
		return [
			'title'   => 'Battle.net',
			'icon'    => 'fas fa-bold',
			'color'   => '#19547c',
			'help'    => 'https://dev.battle.net/apps/register',
			'version' => '1.0',
			'depends' => [
				'addon/authenticator' => '1.0'
			]
		];
	}

	public function data(&$params = [])
	{
		if (!empty($_GET['code']) && !empty($_GET['state']))
		{
			$params = $_GET;

			return function($data){
				return [
					'id'       => $data->id,
					'username' => $data->battletag
				];
			};
		}
	}
}
