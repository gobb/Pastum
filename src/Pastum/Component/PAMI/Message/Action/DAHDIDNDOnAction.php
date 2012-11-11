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
 * DAHDIDNDon action message.
 */
class DAHDIDNDOnAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel Target dahdi Channel
     */
    public function __construct($channel)
    {
        parent::__construct('DAHDIDNDOn');

        $this->setKey('DAHDIChannel', $channel);
    }
}
