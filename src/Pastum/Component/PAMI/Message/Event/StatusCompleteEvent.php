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
 * Event triggered for the end of the list when an action Status is issued.
 */
class StatusCompleteEvent extends EventMessage
{
    /**
     * Returns key: 'Items'.
     *
     * @return string
     */
    public function getListItems()
    {
        return $this->getKey('Items');
    }
}
