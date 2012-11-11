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
 * SendText action message.
 */
class SendTextAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel Channel to send message to
     * @param string $message Message to send
     */
    public function __construct($channel, $message)
    {
        parent::__construct('SendText');

        $this->setKey('Channel', $channel);
        $this->setKey('Message', $message);
    }
}
