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
 * AGI action message.
 */
class AGIAction extends ActionMessage
{
    /**
     * Constructor.
     */
    public function __construct($channel, $command, $commandId = false)
    {
        parent::__construct('AGI');

        $this->setKey('Channel', $channel);
        $this->setKey('Command', $command);

        if ($commandId !== false) {
            $this->setKey('CommandId', $commandId);
        }
    }
}
