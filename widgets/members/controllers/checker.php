<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Members\Controllers;

use UF\uFrag\Loadables\Controller;

class Checker extends Controller
{
	public function online_mini($settings = [])
	{
		return [
			'align' => !empty($settings['align']) && in_array($settings['align'], ['float-left', 'float-right']) ? $settings['align'] : 'float-right'
		];
	}
}
