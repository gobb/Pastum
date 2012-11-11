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
 * ModuleUnload action message.
 */
class ModuleUnloadAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $module Asterisk module name (including.so extension) or
     *                       subsystem identifier:
     *                       - cdr
     *                       - enum
     *                       - dnsmgr
     *                       - extconfig
     *                       - manager
     *                       - rtp
     *                       - http Module name
     */
    public function __construct($module)
    {
        parent::__construct('ModuleLoad');

        $this->setKey('Module', $module);
        $this->setKey('LoadType', 'unload');
    }
}
