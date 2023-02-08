<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Members\Controllers;

use UF\uFrag\Loadables\Controller;

class Admin extends Controller
{
	public function online_mini($settings = [])
	{
		return $this->view('admin_mini', $settings);
	}
}
