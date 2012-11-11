<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAGI\DialDescriptor;

/**
 * Dial Descriptor abstract class.
 */
abstract class DialDescriptor
{
    /**
     * Target to dial.
     *
     * @var string
     */
    protected $target;

    /**
     * Get channel descriptor representation.
     *
     * @return string
     */
    abstract public function getChannelDescriptor();

    /**
     * Get channel technology.
     *
     * @return string
     */
    abstract public function getTechnology();

    /**
     * Set dial target.
     *
     * @param string $target dial target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }
}
