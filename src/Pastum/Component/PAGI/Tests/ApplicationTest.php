<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAGI\Tests;

use Pastum\Component\PAGI\Client\Client;
use Pastum\Component\PAGI\Tests\Fixtures\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testGetClient()
    {
        $app = new Application(Client::getInstance());

        $r = new \ReflectionObject($app);
        $m = $r->getMethod('getClient');
        $m->setAccessible(true);

        $this->assertInstanceOf('\\Pastum\\Component\\PAGI\\Client\\ClientInterface', $m->invoke($app));
    }
}
