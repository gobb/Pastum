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
 * Send a SMS through Dongle.
 */
class DongleSendSMSAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $device  Device name (like dongle01)
     * @param string $number  Destination number
     * @param string $message What to send
     */
    public function __construct($device, $number, $message)
    {
        parent::__construct('DongleSendSMS');

        $this->setKey('Device', $device);
        $this->setKey('Number', $number);
        $this->setKey('Message', $message);
    }
}
