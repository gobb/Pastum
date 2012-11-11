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
 * CreateConfig action message.
 */
class CreateConfigAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $filename Configuration filename (e.g.: foo.conf)
     */
    public function __construct($filename)
    {
        parent::__construct('CreateConfig');

        $this->setKey('Filename', $filename);
    }
}
