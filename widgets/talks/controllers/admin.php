<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Talks\Controllers;

use UF\uFrag\Loadables\Controller;

class Admin extends Controller
{
	public function index($settings = [])
	{
		return $this->view('admin', [
			'talks'    => $this->db->select('talk_id', 'name')->from('nf_talks')->get(),
			'settings' => $settings
		]);
	}
}
