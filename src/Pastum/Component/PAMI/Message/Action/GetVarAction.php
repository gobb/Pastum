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
 * GetVar action message.
 */
class GetVarAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $name    Variable name
     * @param string $channel Optional channel name
     */
    public function __construct($name, $channel = false)
    {
        parent::__construct('Getvar');

        $this->setKey('Variable', $name);

        if ($channel != false) {
            $this->setKey('Channel', $channel);
        }
    }
}
