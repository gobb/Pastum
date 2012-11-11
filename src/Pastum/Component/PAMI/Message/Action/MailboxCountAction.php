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
 * MailboxCount action message.
 */
class MailboxCountAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $mailbox MailboxId (mailbox@vm-context)
     */
    public function __construct($mailbox)
    {
        parent::__construct('MailboxCount');

        $this->setKey('Mailbox', $mailbox);
    }
}
