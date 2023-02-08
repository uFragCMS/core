<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\User\Controllers;

use UF\uFrag\Loadables\Controllers\Module_Checker;

class Admin_Ajax_Checker extends Module_Checker
{
	public function _groups_sort()
	{
		if (($check = post_check('id', 'position')) && ($group = $this->groups->check_group([$check['id']])) && $group['auto'] != 'ufrag')
		{
			return $check;
		}
	}
}
