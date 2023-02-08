<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

function url($url = '')
{
	return uFrag()->url($url);
}

function redirect($location = '')
{
	return uFrag()->url->redirect(url($location));
}

function redirect_back($default = '')
{
	return redirect(uFrag()->url->back() ?: $default);
}

function refresh()
{
	return uFrag()->url->refresh();
}

function urltolink($url)
{
	return '<a href="'.$url.'">'.parse_url($url, PHP_URL_HOST).'</a>';
}
