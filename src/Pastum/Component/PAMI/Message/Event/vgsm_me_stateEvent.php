<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAMI\Message\Event;

/**
 * Whenever a ME (GSM module) changes working state, an event is generated.
 */
class vgsm_me_stateEvent extends EventMessage
{
    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege()
    {
        return $this->getKey('Privilege');
    }

    /**
     * Returns key: 'X-vGSM-ME-State'.
     *
     * @return string
     */
    public function getState()
    {
        return $this->getKey('X-vGSM-ME-State');
    }

    /**
     * Returns key: 'X-vGSM-ME-Old-State'.
     *
     * @return string
     */
    public function getOldState()
    {
        return $this->getKey('X-vGSM-ME-Old-State');
    }

    /**
     * Returns key: 'X-vGSM-ME-State-Change-Reason'.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->getKey('X-vGSM-ME-State-Change-Reason');
    }
}
