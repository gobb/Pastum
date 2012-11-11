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
 * AbsoluteTimeout action message.
 */
class AbsoluteTimeoutAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string  $channel Channel to work on
     * @param integer $timeout Maximum duration of the call (sec)
     */
    public function __construct($channel, $timeout)
    {
        parent::__construct('AbsoluteTimeout');

        $this->setKey('Channel', $channel);
        $this->setKey('Timeout', $timeout);
    }
}
