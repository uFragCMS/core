<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

 require 'vendor/autoload.php';

define('UFRAG_MEMORY',  memory_get_usage());
define('UFRAG_TIME',    microtime(TRUE));
const UFRAG_CMS = __DIR__;
const UFRAG_VERSION = '0.0.1';

error_reporting(E_ALL);

ini_set('error_log',       'logs/php.log');
ini_set('display_errors',  TRUE);
ini_set('default_charset', 'UTF-8');

if (file_exists('install/index.php'))
{
	if (file_exists('install/db.txt'))
	{
		define('UFRAG_INSTALL', TRUE);
	}
	else
	{
		require_once 'install/index.php';
	}
}

mb_regex_encoding('UTF-8');
mb_internal_encoding('UTF-8');

require_once 'config/ufrag.php';

function class_name($name): string
{
	$name = explode('\\', $name);

	array_walk($name, function(&$a){
		if (in_array(strtolower($a), ['array', 'bool', 'default', 'float', 'int', 'list', 'null', 'print']))
		{
			$a .= '_';
		}
	});

	return implode('\\', $name);
}

function uFrag()
{
	static $uFrag;

	if ($args = func_get_args())
	{
		try
		{
			$class = new ReflectionClass(class_name(array_shift($args)));
		}
		catch (ReflectionException $e)
		{
			return;
		}

		if ($debug = UFRAG_DEBUG_BAR || UFRAG_LOGS)
		{
			$memory = memory_get_usage();
			$time   = microtime(TRUE);
		}

		$object = $class->newInstanceArgs(array_shift($args) ?: []);

		if ($debug)
		{
			$object->__debug = (object)[
				'memory' => [$memory, memory_get_usage()],
				'time'   => [$time, microtime(TRUE)]
			];
		}

		if (!$uFrag)
		{
			$uFrag = $object;
		}

		return $object;
	}
	else
	{
		return $uFrag;
	}
}

function check_file($dir, $force = FALSE)
{
	if ($dir === '')
	{
		return FALSE;
	}

	static $cache;

	if (!isset($cache[$dir]) || $force)
	{
		$dirs = explode('/', $dir);

		$exists = TRUE;

		foreach (array_keys($dirs) as $i)
		{
			if (!isset($cache[$path = implode('/', array_slice($dirs, 0, $i + 1))]) || $force)
			{
				$cache[$path] = $exists && file_exists($path);
			}

			$exists = $cache[$path];
		}
	}

	return $cache[$dir];
}

foreach ([
			'array',
			'assets',
			'color',
			'countries',
			'debug',
			'file',
			'geolocalisation',
			'dir',
			'input',
			'location',
			'notify',
			'statistics',
			'string',
			'system',
			'time',
			'user_agent'
		] as $helper
	)
{
	require_once 'ufrag/helpers/'.$helper.'.php';
}

spl_autoload_register(function($name){
	$namespace = explode('\\', $name);

	if (array_shift($namespace) == 'UF' && $namespace)
	{
		array_walk($namespace, function(&$a){
			$a = strtolower(rtrim($a, '_'));
		});

		if (file_exists($file = implode('/', $namespace).'.php'))
		{
			require_once $file;
		}
	}
});

uFrag('UF\uFrag\uFrag')->__path(function ($caller, $type, $file){
    $file = [$file];

    if (!in_array($type, ['addons', 'assets'])) {
        if ($type) {
            array_unshift($file, $type);
        }

        array_unshift($file, 'ufrag');
    }

    $file = implode('/', $file);

    if (!UFRAG_SAFE_MODE) {
        yield 'overrides/' . $file;

        if (property_exists($caller, 'output') && ($theme = $caller->output->theme())) {
            yield 'themes/' . $theme->info()->name . '/overrides/' . $file;
        }
    }

    yield $file;
});


foreach ([
			'input',
			'debug',
			'url',
			'db',
			'access',
			'config',
			'output',
			'session',
			'groups'
		] as $core
	)
{

uFrag()->{'core_' . $core};

}

const UFRAG_CORE = TRUE;

if (defined('UFRAG_INSTALL'))
{
	require_once 'install/index.php';
}


uFrag()->output();

