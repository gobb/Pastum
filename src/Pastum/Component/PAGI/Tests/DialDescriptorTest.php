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

use Pastum\Component\PAGI\DialDescriptor\SIPDialDescriptor;
use Pastum\Component\PAGI\DialDescriptor\DAHDIDialDescriptor;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTechnology()
    {
        $descriptor = new SIPDialDescriptor('666', 'provider');
        $this->assertEquals($descriptor->getTechnology(), 'SIP');

        $descriptor = new DAHDIDialDescriptor('666', '1', true, false);
        $this->assertEquals($descriptor->getTechnology(), 'DAHDI');
    }

    public function testGetChannelDescriptor()
    {
        $descriptor = new SIPDialDescriptor('666', 'provider');
        $this->assertEquals($descriptor->getChannelDescriptor(), 'SIP/666@provider');

        $descriptor->setProvider('foo');
        $this->assertEquals($descriptor->getChannelDescriptor(), 'SIP/666@foo');

        $descriptor = new DAHDIDialDescriptor('666', '1');
        $this->assertEquals($descriptor->getChannelDescriptor(), 'DAHDI/G1/666');

        $descriptor = new DAHDIDialDescriptor('666', '1', true, false);
        $this->assertEquals($descriptor->getChannelDescriptor(), 'DAHDI/g1/666');

        $descriptor->setGroup(4);
        $descriptor->setTarget('777');
        $this->assertEquals($descriptor->getChannelDescriptor(), 'DAHDI/g4/777');

        $descriptor->setChannel('1-1');
        $this->assertEquals($descriptor->getChannelDescriptor(), 'DAHDI/1-1/777');
    }
}
