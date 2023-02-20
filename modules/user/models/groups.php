<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\User\Models;

use UF\uFrag\Loadables\Model;

class Groups extends Model
{
	public function add_group($title, $color, $icon, $hidden, $lang)
	{
		$group_id = $this->db->insert('groups', [
			'name'   => url_title($title),
			'color'  => $color,
			'icon'   => $icon,
			'hidden' => $hidden,
			'auto'   => FALSE
		]);

		$this->db->insert('groups_lang', [
			'group_id' => $group_id,
			'lang'     => $lang,
			'title'    => $title
		]);
	}

	public function edit_group($group_id, $title, $color, $icon, $hidden, $lang, $auto)
	{
		$group = [
			'color'  => $color,
			'icon'   => $icon,
			'hidden' => $hidden
		];

		if (!$auto)
		{
			$group['name'] = url_title($title);

			$this->db	->where('group_id', $group_id)
						->update('groups_lang', [
							'lang'  => $lang,
							'title' => $title
						]);
		}

		$this->db	->where('group_id', $group_id)
					->update('groups', $group);
	}
}
