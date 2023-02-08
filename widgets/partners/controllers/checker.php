<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Partners\Controllers;

use UF\uFrag\Loadables\Controller;

class Checker extends Controller
{
	public function index($settings = [])
	{
		return [
			'display_style'  => in_array($settings['display_style'], ['light', 'dark']) ? $settings['display_style'] : 'light',
			'display_number' => (int)$settings['display_number'],
			'display_height' => (int)$settings['display_height'] ?: '140',
			'id'             => $settings['id']
		];
	}

	public function column($settings = [])
	{
		return [
			'display_style' => in_array($settings['display_style'], ['light', 'dark']) ? $settings['display_style'] : 'light'
		];
	}
}
