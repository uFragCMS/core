<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\User\Models\User;

class Delete extends \UF\uFrag\Actions\Delete
{
	protected function check($user)
	{
		return !$user->deleted;
	}
}
