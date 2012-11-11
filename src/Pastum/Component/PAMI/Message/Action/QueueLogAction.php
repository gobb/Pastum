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
 * QueueLog action message.
 */
class QueueLogAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $queue Queue name
     * @param string $event Event
     */
    public function __construct($queue, $event)
    {
        parent::__construct('QueueLog');

        $this->setKey('Event', $event);
        $this->setKey('Queue', $queue);
    }

    /**
     * Sets penalty. Key: 'UniqueId'.
     *
     * @param string $uniqueId Unique Id
     */
    public function setUniqueId($uniqueId)
    {
        $this->setKey('UniqueId', $uniqueId);
    }

    /**
     * Sets member name. Key: 'Interface'.
     *
     * @param string $interface Interface
     */
    public function setMemberName($interface)
    {
        $this->setKey('Interface', $interface);
    }

    /**
     * Sets paused. Key: 'Message'.
     *
     * @param string $message Message
     */
    public function setMessage($message)
    {
        $this->setKey('Message', $message);
    }
}
