<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

function notify($message, $type = 'success')
{
	uFrag()->session->append('notifications', [
		'message' => (string)$message,
		'type'    => get_colors($type) ? $type : 'success'
	]);
}

function notifications()
{
	if ($notifications = uFrag()->session('notifications'))
	{
		foreach ($notifications as $notification)
		{
			uFrag()->js_load('notify(\''.addcslashes($notification['message'], '\'').'\', \''.$notification['type'].'\');');
		}

		uFrag()->session->destroy('notifications');
	}
}
