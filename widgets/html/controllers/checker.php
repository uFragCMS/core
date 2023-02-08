<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Html\Controllers;

use UF\uFrag\Loadables\Controller;

class Checker extends Controller
{
	public function index($settings = [])
	{
		return [
			'content' => $settings['content']
		];
	}

	public function html($settings = [])
	{
		return [
			'content' => $settings['content']
		];
	}
}
