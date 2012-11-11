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
 * DBDelTree action message.
 */
class DBDelTreeAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $family Family
     * @param string $key    Name (optional)
     */
    public function __construct($family, $key = false)
    {
        parent::__construct('DBDelTree');

        $this->setKey('Family', $family);

        if ($key != false) {
            $this->setKey('Key', $key);
        }
    }
}
