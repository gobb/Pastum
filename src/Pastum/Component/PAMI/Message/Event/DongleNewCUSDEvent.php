<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAMI\Message\Event;

/**
 * Event triggered when a ussd was queued for sent by dongle.
 */
class DongleNewCUSDEvent extends EventMessage
{
    /**
     * Returns key: 'Device'.
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->getKey('Device');
    }

    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege()
    {
        return $this->getKey('Privilege');
    }

    /**
     * Returns key: 'Message'.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->getKey('Message');
    }
}
