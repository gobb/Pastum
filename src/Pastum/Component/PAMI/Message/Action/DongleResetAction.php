<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 */
namespace Pastum\Component\PAMI\Message\Action;

/**
 * Resets a dongle.
 */
class DongleResetAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $device Dongle device name
     */
    public function __construct($device)
    {
        parent::__construct('DongleReset');

        $this->setKey('device', $device);
    }
}
