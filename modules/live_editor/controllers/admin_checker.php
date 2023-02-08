<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Live_Editor\Controllers;

use UF\uFrag\Loadables\Controllers\Module_Checker;

class Admin_Checker extends Module_Checker
{
	public function index()
	{
		if (!$this->user->admin)
		{
			$this->error->unauthorized();
		}

		return [];
	}
}
