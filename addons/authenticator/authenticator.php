<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Addons\Authenticator;

use UF\uFrag\Loadables\Addon;

class Authenticator extends Addon
{
	protected function __info()
	{
		return [
			'title'   => 'Authentificateur',
			'icon'    => 'fas fa-sign-in-alt',
			'version' => '1.0',
			'depends' => [
				'ufrag' => '0.0.1'
			]
		];
	}
}
