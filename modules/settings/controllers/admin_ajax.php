<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Settings\Controllers;

use UF\uFrag\Loadables\Controllers\Module as Controller_Module;

class Admin_Ajax extends Controller_Module
{
	public function maintenance()
	{
		$this->config('maintenance', (bool)post('closed'), 'bool');

		return $this->json([
			'status' => $this->config->maintenance
		]);
	}
}
