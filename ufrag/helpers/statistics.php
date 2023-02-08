<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

function statistics($name, $value = NULL, $callback = NULL)
{
	static $statistics;

	if ($statistics === NULL)
	{
		foreach (uFrag()->db->from('nf_statistics')->get() as $stat)
		{
			$statistics[$stat['name']] = $stat['value'];
		}
	}

	if (func_num_args() > 1)
	{
		if (isset($statistics[$name]))
		{
			if ($callback === NULL || call_user_func($callback, $value, $statistics[$name]))
			{
				uFrag()->db	->where('name', $name)
										->update('nf_statistics', [
											'value' => $value
										]);
			}
		}
		else
		{
			uFrag()->db->insert('nf_statistics', [
				'name'  => $name,
				'value' => $value
			]);
		}
	}
	else
	{
		return $statistics[$name];
	}
}
