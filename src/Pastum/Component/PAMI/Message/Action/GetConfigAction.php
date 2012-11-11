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
 * GetConfig action message.
 */
class GetConfigAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string  $filename Configuration filename (e.g.: foo.conf)
     * @param Boolean $category Category in configuration file
     */
    public function __construct($filename, $category = false)
    {
        parent::__construct('GetConfig');

        $this->setKey('Filename', $filename);

        if ($category != false) {
            $this->setKey('Category', $category);
        }
    }
}
