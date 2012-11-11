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
 * Event triggered for the end of the list of dongle channels.
 */
class DongleShowDevicesCompleteEvent extends EventMessage
{
    /**
     * Returns key: 'ListItems'.
     *
     * @return string
     */
    public function getListItems()
    {
        return $this->getKey('listitems');
    }
}
