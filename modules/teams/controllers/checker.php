<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Teams\Controllers;

use UF\uFrag\Loadables\Controllers\Module_Checker;

class Checker extends Module_Checker
{
	public function _team($team_id, $name)
	{
		if ($team = $this->model()->check_team($team_id, $name))
		{
			return $team;
		}
	}
}
