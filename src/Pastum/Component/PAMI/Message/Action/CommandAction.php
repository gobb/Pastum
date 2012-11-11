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
 * Command action message.
 */
class CommandAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $command CLI Command to issue
     */
    public function __construct($command)
    {
        parent::__construct('Command');

        $this->setKey('Command', $command);
    }
}
