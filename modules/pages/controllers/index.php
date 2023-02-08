<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Pages\Controllers;

use UF\uFrag\Loadables\Controllers\Module as Controller_Module;

class Index extends Controller_Module
{
	public function _index($page_id, $title, $subtitle, $content)
	{
		$this	->title($title)
				->breadcrumb($title);

		return $this->panel()
					->heading($title.($subtitle ? ' <small>'.$subtitle.'</small>' : ''), 'far fa-file-alt')
					->body(bbcode($content));
	}
}
