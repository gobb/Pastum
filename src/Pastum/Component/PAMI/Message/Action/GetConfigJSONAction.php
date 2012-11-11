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
 * GetConfigJSON action message.
 */
class GetConfigJSONAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $filename Configuration filename (e.g.: foo.conf)
     */
    public function __construct($filename)
    {
        parent::__construct('GetConfigJSON');

        $this->setKey('Filename', $filename);
    }
}
