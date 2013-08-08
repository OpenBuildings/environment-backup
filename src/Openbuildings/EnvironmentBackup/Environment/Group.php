<?php

namespace Openbuildings\EnvironmentBackup;

/**
 * @package    Openbuildings\EnvironmentBackup
 * @author     Ivan Kerin
 * @copyright  (c) 2013 OpenBuildings Ltd.
 * @license    http://spdx.org/licenses/BSD-3-Clause
 */
interface Environment_Group {

	/**
	 * How to set a value on a parameter
	 * 
	 * @param string $name  
	 * @param mixed $value 
	 */
	public function set($name, $value);

	/**
	 * How to get a parameter
	 * 
	 * @param  string $name 
	 */
	public function get($name);

	/**
	 * Check if this name belongs to this group
	 * 
	 * @param  string  $name 
	 * @return boolean       
	 */
	public function has($name);
}