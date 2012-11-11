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
 * Event triggered when a database key is asked for.
 */
class DBGetResponseEvent extends EventMessage
{
    /**
     * Returns key: 'Family'.
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->getKey('Family');
    }

    /**
     * Returns key: 'Key'.
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->getKey('Key');
    }

    /**
     * Returns key: 'Val'.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->getKey('Val');
    }
}
