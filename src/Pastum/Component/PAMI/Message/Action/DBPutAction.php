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
 * DBPut action message.
 */
class DBPutAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $family Family
     * @param string $key    Name
     * @param string $value  Value
     */
    public function __construct($family, $key, $value)
    {
        parent::__construct('DBPut');

        $this->setKey('Family', $family);
        $this->setKey('Key', $key);
        $this->setKey('Val', $value);
    }
}
