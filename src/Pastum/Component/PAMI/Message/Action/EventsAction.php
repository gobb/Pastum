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
 * Events action message.
 */
class EventsAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param array $mask Asterisk events to handle (system, call, log, etc)
     */
    public function __construct(array $mask = array())
    {
        parent::__construct('Events');

        if (empty($mask)) {
            $this->setKey('EventMask', 'off');
        } else {
            $this->setKey('EventMask', implode(',', $mask));
        }
    }
}
