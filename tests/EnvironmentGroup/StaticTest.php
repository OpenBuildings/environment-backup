<?php

namespace Openbuildings\EnvironmentBackup\Test\EnvironmentGroup;

use Openbuildings\EnvironmentBackup\Environment_Group_Static;

/**
 * @package Openbuildings\EnvironmentBackup
 * @group   environment
 * @group   environment.static
 */
class Environment_Group_StaticTest extends \PHPUnit_Framework_TestCase {

	public function test_methods()
	{
		$group = new Environment_Group_Static;

		$dummyClassFqcn = 'Openbuildings\EnvironmentBackup\Test\EnvironmentGroup\StaticDummy';
		$this->assertEquals('value 1', $group->get("$dummyClassFqcn::\$var_public"));
		$this->assertEquals('value 2', $group->get("$dummyClassFqcn::\$var_protected"));
		$this->assertEquals('value 3', $group->get("$dummyClassFqcn::\$var_private"));

		$group->set("$dummyClassFqcn::\$var_public", 'new 1');
		$group->set("$dummyClassFqcn::\$var_protected", 'new 2');
		$group->set("$dummyClassFqcn::\$var_private", 'new 3');

		$this->assertEquals('new 1', StaticDummy::$var_public);
		$this->assertEquals('new 2', StaticDummy::get_var_protected());
		$this->assertEquals('new 3', StaticDummy::get_var_private());

		$this->assertEquals('new 1', $group->get("$dummyClassFqcn::\$var_public"));
		$this->assertEquals('new 2', $group->get("$dummyClassFqcn::\$var_protected"));
		$this->assertEquals('new 3', $group->get("$dummyClassFqcn::\$var_private"));

		$this->assertTrue($group->has("$dummyClassFqcn::\$var_public"));
		$this->assertTrue($group->has('Environment::$some'));
		$this->assertFalse($group->has('other variable'));
	}
}
