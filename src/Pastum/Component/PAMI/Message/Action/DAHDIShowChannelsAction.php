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
 * DAHDIShowChannels action message.
 */
class DAHDIShowChannelsAction extends ActionMessage
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('DAHDIShowChannels');
    }
}
