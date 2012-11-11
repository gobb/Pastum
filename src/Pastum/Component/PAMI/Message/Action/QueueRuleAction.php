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
 * QueueRule action message.
 */
class QueueRuleAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $rule Rule
     */
    public function __construct($rule = false)
    {
        parent::__construct('QueueRule');

        if ($rule !== false) {
            $this->setKey('Rule', $rule);
        }
    }
}
