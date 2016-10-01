<?php

namespace Openbuildings\EnvironmentBackup;

/**
 * This class is used to denote an 'not set' varible. If a parameter was not present at all before a ->set() call
 * we use this class to remember that, and later on '->restore()' the parameter is restored to its previous state e.g. 'not present'
 * 
 * @package    Openbuildings\EnvironmentBackup
 * @author     Ivan Kerin
 * @copyright  (c) 2013 OpenBuildings Ltd.
 * @license    http://spdx.org/licenses/BSD-3-Clause
 */
class Environment_Notset {

}