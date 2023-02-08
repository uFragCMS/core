<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Install;

use UF\uFrag\Loadables\Install;

class Alpha_0_2_4 extends Install
{
	public function up()
	{
		foreach (['background_position', 'background_color', 'text_color'] as $var)
		{
			$this->config('nf_maintenance_'.$var, trim($this->config->{'nf_maintenance_'.$var}));
		}

		@array_map('unlink', [
			'ufrag/install/alpha.0.1.1.php',
			'ufrag/install/alpha.0.1.2.php',
			'ufrag/install/alpha.0.1.3.php',
			'ufrag/install/alpha.0.1.4.2.php',
			'ufrag/install/alpha.0.1.4.php',
			'ufrag/install/alpha.0.1.5.2.php',
			'ufrag/install/alpha.0.1.5.php',
			'ufrag/install/alpha.0.1.6.1.php',
			'ufrag/install/alpha.0.1.6.php',
			'ufrag/install/alpha.0.2.php',
			'ufrag/install/alpha_0_2_0_1.php',
			'ufrag/install/alpha_0_2_1.php',
			'ufrag/install/alpha_0_2_2.php',
			'ufrag/install/alpha_0_2_3.php'
		]);
	}
}
