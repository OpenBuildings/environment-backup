<?php

namespace Openbuildings\EnvironmentBackup;

/**
 * Used in testing
 * 
 * @package    Openbuildings\EnvironmentBackup
 * @author     Ivan Kerin
 * @copyright  (c) 2013 OpenBuildings Ltd.
 * @license    http://spdx.org/licenses/BSD-3-Clause
  */
class Environment_Group_Dummy implements Environment_Group {

	public $variables = array();

	public function set($name, $value)
	{
		if ($value instanceof Environment_Notset) 
		{
			unset($this->variables[$name]);
		}
		else
		{
			$this->variables[$name] = $value;
		}
	}

	public function get($name)
	{
		return isset($this->variables[$name]) ? $this->variables[$name] : new Environment_Notset;
	}

	public function has($name)
	{
		return strpos($name, 'test_') === 0;
	}
}