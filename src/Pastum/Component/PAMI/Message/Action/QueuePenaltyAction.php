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
 * QueuePenalty action message.
 */
class QueuePenaltyAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $queue Queue name
     * @param string $event Event
     */
    public function __construct($interface, $penalty, $queue = false)
    {
        parent::__construct('QueuePenalty');

        $this->setKey('Interface', $interface);
        $this->setKey('Penalty', $penalty);

        if ($queue !== false) {
            $this->setKey('Queue', $queue);
        }
    }
}
