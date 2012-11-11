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
 * PlayDTMF action message.
 */
class PlayDTMFAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $user     AMI username
     * @param string $password AMI password
     */
    public function __construct($channel, $digit)
    {
        parent::__construct('PlayDTMF');

        $this->setKey('Channel', $channel);
        $this->setKey('Digit', $digit);
    }
}
