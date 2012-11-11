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
 * ExtensionState action message.
 */
class ExtensionStateAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $exten   Extension to check for
     * @param string $context Context for extension
     */
    public function __construct($exten, $context)
    {
        parent::__construct('ExtensionState');

        $this->setKey('Exten', $exten);
        $this->setKey('Context', $context);
    }
}
