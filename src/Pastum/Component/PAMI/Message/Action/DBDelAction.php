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
 * DBDel action message.
 */
class DBDelAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $family Family
     * @param string $key    Name
     */
    public function __construct($family, $key)
    {
        parent::__construct('DBDel');

        $this->setKey('Family', $family);
        $this->setKey('Key', $key);
    }
}
