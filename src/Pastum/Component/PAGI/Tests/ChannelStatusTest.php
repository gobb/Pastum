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

use Pastum\Component\PAGI\Client\ChannelStatus;

class ChannelStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::DOWN_AVAILABLE), 'Channel is down and available');
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::DOWN_RESERVED), 'Channel is down, but reserved');
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::OFF_HOOK), 'Channel is off hook');
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::DIGITS_DIALED), 'Digits (or equivalent) have been dialed');
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::LINE_RINGING), 'Line is ringing');
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::REMOTE_RINGING), 'Remote end is ringing');
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::LINE_UP), 'Line is up');
        $this->assertEquals(ChannelStatus::toString(ChannelStatus::LINE_BUSY), 'Line is busy');
        $this->assertFalse(ChannelStatus::toString('foo'));
    }
}
