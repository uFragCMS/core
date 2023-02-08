<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Members;

use UF\uFrag\Addons\Module;

class Members extends Module
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('Liste des membres'),
			'description' => '',
			'icon'        => 'fas fa-users',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '1.0',
			'depends'     => [
				'ufrag' => 'Alpha 0.2'
			],
			'routes'      => [
				'{pages}'                                   => 'index',
				'group/(admins|members){pages}'             => '_group',
				'group/{url_title}-{id}/{url_title}{pages}' => '_group',
				'group/{id}/{url_title}{pages}'             => '_group'
			]
		];
	}
}
