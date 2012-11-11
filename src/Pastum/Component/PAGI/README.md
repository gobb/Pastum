PAGI Component
==============

This framework is intended to simply making IVR applications using Asterisk's AGI, providing a nice level of
abstraction over what an IVR should look like from a developers' perspective.

```php
<?php

require_once __DIR__.'/../vendor/autoload.php';

class MyApplication extends Pastum\Component\PAGI\Application\Application
{
	// @see Resources/doc/usage.md
}

$client = Pastum\Component\PAGI\Client\Client::getInstance();

$app = new MyApplication($client);
$app->init();
$app->run();
```

More Information
----------------

Read the [documentation](PAGI/Resources/doc) for more information.
