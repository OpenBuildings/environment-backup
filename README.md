# Environment Backup [![Build Status](https://travis-ci.org/OpenBuildings/environment-backup.png)](https://travis-ci.org/OpenBuildings/environment-backup) [![Coverage Status](https://coveralls.io/repos/OpenBuildings/environment-backup/badge.png?branch=master)](https://coveralls.io/r/OpenBuildings/environment-backup?branch=master)

Set environment variables: globals, static vars, kohana configs etc. and later restore their original values. This is useful testing when you want to have a specific environment set for the test, but don't want that test to affect other code outside of it.

The environment class is initialized with some environment groups, each handling specific type of environment. You can easily add more classes to handle different environments.

Each environment group that you add allows has a unique name of "naming" its variables so that it knows how to handle their backup

 - '_POST', '_GET', '_FILES', '_SERVER', '_COOKIE' and '_SESSION' are handled by the 'Environment_Group_Globals',
 - 'REMOTE_HOST', 'CLIENT_IP' and all the other variables inside the '_SERVER' variable are handled by Environment_Group_Server (this is used to easily backup restore only sertain variables of the $_SERVER super global)
 - 'SomeClass::$variable' is used to handle stativ variables - it can backup / restore public, protected and private ones by Environment_Group_Static
 - 'group.config_var' is used to handle Kohana config settings by Environment_Group_Config - this is used only in a Kohana Framwork environment

Example: 

```php
$environment = new Environment(array(
	'globals' => new Environment_Group_Globals(),
	'server' => new Environment_Group_Server(),
	'static' => new Environment_Group_Static(),
));

$environment->backup_and_set(array(
	'_POST' => array('new stuff'),
	'REMOTE_HOST' => 'example.com',
	'MyClass::$private_var' => 10
));

// Do some stuff that changes / uses these variables

$environment->restore();
```

## License

Copyright (c) 2012-2013, OpenBuildings Ltd. Developed by Ivan Kerin as part of [clippings.com](http://clippings.com)

Under BSD-3-Clause license, read LICENSE file.
