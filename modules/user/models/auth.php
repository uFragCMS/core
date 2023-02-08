<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\User\Models;

use UF\uFrag\Loadables\Model2;

class Auth extends Model2
{
	static public function __schema()
	{
		return [
			'id'            => self::field()->primary(),
			'user'          => self::field()->depends('user/user'),
			'authenticator' => self::field()->depends('addon'),
			'key'           => self::field()->text(100),
			'username'      => self::field()->text(100),
			'avatar'        => self::field()->text(100)
		];
	}
}
