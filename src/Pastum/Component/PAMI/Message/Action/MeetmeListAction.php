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
 * MeetmeList action message.
 */
class MeetmeListAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $conference Conference number
     */
    public function __construct($conference)
    {
        parent::__construct('MeetmeList');

        $this->setKey('Conference', $conference);
    }
}
