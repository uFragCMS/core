<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\User\Controllers;

use UF\uFrag\Loadables\Controller;

class Checker extends Controller
{
	public function index_mini($settings = [])
	{
		return [
			'align' => !empty($settings['align']) && in_array($settings['align'], ['justify-content-start', 'justify-content-end']) ? $settings['align'] : 'justify-content-end'
		];
	}
}
