<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Widgets\Copyright\Controllers;

use UF\uFrag\Loadables\Controllers\Widget as Controller_Widget;

class Index extends Controller_Widget
{
	public function index($settings = [])
	{
		$keywords = [
			'name'      => '<a href="'.url().'">'.$this->config->name.'</a>',
			'ufrag'   => '<a href="https://neofr.ag">uFrag</a>',
			'year'      => date('Y'),
			'copyright' => icon('far fa-copyright')
		];

		if (!in_string('{ufrag}', $copyright = utf8_html_entity_decode($this->config->copyright)))
		{
			$copyright .= '<div class="float-right">'.$this->lang('Propulsé par %s', '{ufrag}').'</div>';
		}

		return $this->panel()
					->body(preg_replace_callback('/\{('.implode('|', array_keys($keywords)).')\}/i', function($match) use ($keywords){
						return $keywords[$match[1]];
					}, $copyright));
	}
}
