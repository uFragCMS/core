<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Talks\Controllers;

use UF\uFrag\Loadables\Controller;

class Checker extends Controller
{
	public function index($settings = [])
	{
		$talks = $this->db->select('talk_id')->from('nf_talks')->get();

		return [
			'talk_id' => in_array($settings['talk_id'], $talks) ? $settings['talk_id'] : current($talks)
		];
	}
}
