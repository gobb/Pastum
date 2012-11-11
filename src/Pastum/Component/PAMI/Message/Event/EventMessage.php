<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAMI\Message\Event;

use Pastum\Component\PAMI\Message\IncomingMessage;

/**
 * This is a generic event received from ami.
 */
abstract class EventMessage extends IncomingMessage
{
    /**
     * Returns key 'Event'.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getKey('Event');
    }
}
