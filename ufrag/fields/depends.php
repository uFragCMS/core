<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\uFrag\Fields;

class Depends
{
	protected $_model;
	protected $_suffix;

	public function __construct($model, $suffix = '_id')
	{
		$this->_model  = explode('/', $model);
		$this->_suffix = $suffix;
	}

	public function key($key)
	{
		return $key.$this->_suffix;
	}

	public function raw($value)
	{
		return (is_a($value, 'UF\uFrag\Loadables\Model2') ? $value->id : $value) ?: NULL;
	}

	public function value($value)
	{
		if (is_a($value, 'UF\uFrag\Loadables\Model2'))
		{
			return $value;
		}

		if (isset($this->_model[1]))
		{
			$value = uFrag()->module($this->_model[0])->model2($this->_model[1], $value);
		}
		else
		{
			$value = uFrag()->model2($this->_model[0], $value);
		}

		return $value;
	}
}
