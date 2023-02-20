<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Pages\Controllers;

use UF\uFrag\Loadables\Controllers\Module_Checker;

class Checker extends Module_Checker
{
	public function _index($name)
	{
		if ($this->url->segments[0] != 'pages' && ($content = $this->db->select('p.page_id', 'pl.title', 'pl.subtitle', 'pl.content')->from('pages p')->join('pages_lang pl', 'p.page_id = pl.page_id')->where('name', $name)->where('published', TRUE)->row()))
		{
			if ($this->access('pages', 'access_page', $content['page_id']))
			{
				return $content;
			}

			return $this->error->unauthorized();
		}
	}
}
