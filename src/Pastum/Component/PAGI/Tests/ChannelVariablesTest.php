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

class ChannelVariablesTest extends \PHPUnit_Framework_TestCase
{
    public function testGetChannelVariables()
    {
        $client = \Pastum\Component\PAGI\Client\Client::getInstance();
        $channelVariables = new ChannelVariablesFacade();

        $this->assertEquals($channelVariables, $client->getChannelVariables());
    }

    public function testGetVariable()
    {
        $client = \Pastum\Component\PAGI\Client\Client::getInstance();

        $vars = $client->getChannelVariables();

        $this->assertEquals($vars->getChannel(), 'SIP/foo-7026f150');
        $this->assertEquals($vars->getLanguage(), 'ar');
        $this->assertEquals($vars->getType(), 'SIP');
        $this->assertEquals($vars->getUniqueId(), '1306865753.2488');
        $this->assertEquals($vars->getVersion(), '1.6.0.9');
        $this->assertEquals($vars->getCallerId(), '666');
        $this->assertEquals($vars->getCallerIdName(), 'Foo');
        $this->assertEquals($vars->getCallingPres(), '1');
        $this->assertEquals($vars->getCallingAni2(), '0');
        $this->assertEquals($vars->getCallingTon(), '0');
        $this->assertEquals($vars->getCallingTns(), '0');
        $this->assertEquals($vars->getDNID(), '66666666');
        $this->assertEquals($vars->getRDNIS(), 'unknown');
        $this->assertEquals($vars->getDNIS(), '55555555');
        $this->assertEquals($vars->getContext(), 'netlabs');
        $this->assertEquals($vars->getRequest(), 'anagi.php');
        $this->assertEquals($vars->getThreadId(), '1105672528');
        $this->assertEquals($vars->getAccountCode(), '123');
        $this->assertEquals($vars->getEnhanced(), '0.0');
        $this->assertEquals($vars->getPriority(), '1');
        $this->assertEquals($vars->getTotalArguments(), 2);
        $this->assertEquals($vars->getArgument(1), 'arg1');
        $this->assertEquals($vars->getArgument(2), 'arg2');
        $this->assertEquals(array(1 => 'arg1', 2 => 'arg2'), $vars->getArguments());
        $this->assertFalse($vars->getArgument(3));

        $r = new \ReflectionObject($vars);
        $m = $r->getMethod('getVariable');
        $m->setAccessible(true);

        $this->assertFalse($m->invoke($vars, 'unexistant'));
    }

    public function testGetEnvironmentVariables()
    {
        putenv('AST_CONFIG_DIR=1');
        putenv('AST_CONFIG_FILE=2');
        putenv('AST_MODULE_DIR=3');
        putenv('AST_SPOOL_DIR=4');
        putenv('AST_MONITOR_DIR=5');
        putenv('AST_VAR_DIR=6');
        putenv('AST_DATA_DIR=7');
        putenv('AST_LOG_DIR=8');
        putenv('AST_AGI_DIR=9');
        putenv('AST_KEY_DIR=10');
        putenv('AST_RUN_DIR=11');

        $client = \Pastum\Component\PAGI\Client\Client::getInstance();

        $vars = $client->getChannelVariables();

        $this->assertEquals($vars->getDirectoryRun(), 11);
        $this->assertEquals($vars->getDirectoryKey(), 10);
        $this->assertEquals($vars->getDirectoryAgi(), 9);
        $this->assertEquals($vars->getDirectoryLog(), 8);
        $this->assertEquals($vars->getDirectoryData(), 7);
        $this->assertEquals($vars->getDirectoryVar(), 6);
        $this->assertEquals($vars->getDirectoryMonitor(), 5);
        $this->assertEquals($vars->getDirectorySpool(), 4);
        $this->assertEquals($vars->getDirectoryModules(), 3);
        $this->assertEquals($vars->getConfigFile(), 2);
        $this->assertEquals($vars->getDirectoryConfig(), 1);
    }
}
