<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Displayables;

use UF\uFrag\Core\Output;
use UF\uFrag\Displayable;

class Zone extends Displayable
{
	public function display($disposition)
	{
		$output = unserialize($disposition['disposition']);

		if ($live_editor = uFrag()->output->live_editor())
		{
			$i = 0;

			$output->each(function($row) use (&$i){
				return $row->id($i++);
			});

			if ($live_editor & Output::ZONES)
			{
				$zone_id = $disposition['zone'];
				$theme   = $this->theme($disposition['theme']);

				$output = '	<div class="float-right">
								'.($disposition['page'] == '*' ? '<button type="button" class="btn btn-link live-editor-fork" data-enabled="0">'.icon('fas fa-toggle-off').' '.uFrag()->lang('Disposition commune').'</button>' : '<button type="button" class="btn btn-link live-editor-fork" data-enabled="1">'.icon('fas fa-toggle-on').' '.uFrag()->lang('Disposition spécifique à la page').'</button>').'
							</div>
							<h3>'.(!empty($theme->info()->zones[$zone_id]) ? $theme->info()->zones[$zone_id] : uFrag()->lang('Zone #%d', $zone_id)).' <div class="btn-group"><button type="button" class="btn btn-xs btn-success live-editor-add-row" data-toggle="tooltip" data-container="body" title="'.uFrag()->lang('Nouveau Row').'">'.icon('fas fa-plus').'</button></div></h3>'.
							$output;
			}

			$output = '<div'.($live_editor & Output::ZONES ? ' class="live-editor-zone"' : '').' data-disposition-id="'.$disposition['disposition_id'].'">'.$output.'</div>';
		}

		return $output;
	}
}
