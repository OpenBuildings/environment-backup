<?php

namespace Openbuildings\EnvironmentBackup;

/**
* 
*/
interface Environment_Group {

	public function set($name, $value);

	public function get($name);

	public function has($name);
}