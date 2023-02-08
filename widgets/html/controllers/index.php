<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Html\Controllers;

use UF\uFrag\Loadables\Controllers\Widget as Controller_Widget;

class Index extends Controller_Widget
{
	public function index($settings = [])
	{
		return $this->panel()->body(bbcode($settings['content']));
	}

	public function html($settings = [])
	{
		return $this->panel()->body($settings['content']);
	}
}
