<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Search\Controllers;

use UF\uFrag\Loadables\Controller;

class Checker extends Controller
{
	public function index($settings = [])
	{
		return [
			'align' => !empty($settings['align']) && in_array($settings['align'], ['float-left', 'float-right']) ? $settings['align'] : 'float-right'
		];
	}
}
