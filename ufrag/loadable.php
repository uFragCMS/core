<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag;

interface Loadable
{
	static public function __load($caller, $args);
}
