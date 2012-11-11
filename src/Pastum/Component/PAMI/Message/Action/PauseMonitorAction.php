<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAMI\Message\Action;

/**
 * Pauses the Monitor for a given channel.
 */
class PauseMonitorAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel Channel monitored to pause
     */
    public function __construct($channel)
    {
        parent::__construct('PauseMonitor');

        $this->setKey('Channel', $channel);
    }
}
