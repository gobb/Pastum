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
 * ModuleCheck action message.
 */
class ModuleCheckAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $module Module name
     */
    public function __construct($module)
    {
        parent::__construct('ModuleCheck');

        $this->setKey('Module', $module);
    }
}
