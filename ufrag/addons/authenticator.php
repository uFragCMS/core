<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Addons;

use UF\uFrag\Loadables\Addon;

abstract class Authenticator extends Addon
{
	static public function __class($name)
	{
		return 'Addons\authenticator_'.$name.'\authenticator_'.$name;
	}

	static public function url()
	{
		return (uFrag()->url->https ? 'https' : 'http').'://'.uFrag()->url->host.uFrag()->url->base.'user/auth';
	}

	protected function __info()
	{
		return [];
	}

	public $_keys = ['id', 'secret'];

	abstract public function data(&$params = []);

	public function is_setup()
	{
		$settings = $this->__settings->{$this->url->production() ? 'prod' : 'dev'};

		foreach ($this->_keys as $key)
		{
			if (empty($settings->$key))
			{
				return FALSE;
			}
		}

		return TRUE;
	}

	public function config()
	{
		$settings = $this->__settings->{$this->url->production() ? 'prod' : 'dev'};

		return [
			'applicationId'     => $settings->id,
			'applicationSecret' => $settings->secret
		];
	}

	public function __toString()
	{
		$button = $this	->button()
						->tooltip($this->info()->title)
						->icon($this->info()->icon)
						->style('background-color', $this->info()->color)
						->url('user/auth/'.url_title($this->info()->name));

		return '<div class="btn-auth">'.$button.'</div>';
	}

	public function _params()
	{
		return [
			'callback' => static::url().'/'.url_title($this->info()->name)
		];
	}
}
