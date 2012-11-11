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
 * Queue pause action.
 */
class QueuePauseAction extends ActionMessage
{
    /**
     * Constructor.
     */
    public function __construct($interface, $queue = false, $reason = false)
    {
        parent::__construct('QueuePause');

        if ($queue !== false) {
            $this->setKey('Queue', $queue);
        }

        if ($reason !== false) {
            $this->setKey('Reason', $reason);
        }

        $this->setKey('Interface', $interface);
        $this->setKey('Paused', 'true');
    }
}
