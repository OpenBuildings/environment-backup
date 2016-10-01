<?php

namespace Openbuildings\EnvironmentBackup\Test\EnvironmentGroup;

class StaticDummy {

	public static $var_public       = 'value 1';
	protected static $var_protected = 'value 2';
	private static $var_private     = 'value 3';

	public static function get_var_protected()
	{
		return self::$var_protected;
	}

	public static function get_var_private()
	{
		return self::$var_private;
	}
}
