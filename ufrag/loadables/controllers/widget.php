<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Loadables\Controllers;

use UF\uFrag\Loadables\Controller;

abstract class Widget extends Controller
{
	abstract public function index($config = []);

	public function __construct($caller)
	{
		parent::__construct($this->widget = $caller);
	}

	public function title($title)
	{
		$this->widget->data->append('title', $title);
		return $this;
	}
}
