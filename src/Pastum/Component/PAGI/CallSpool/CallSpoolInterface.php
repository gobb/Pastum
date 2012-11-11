<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAGI\CallSpool;

/**
 * An interface to access asterisk call spool.
 */
interface CallSpoolInterface
{
    /**
     * Spools the given call.
     *
     * @param CallFile $call     Call to spool
     * @param integer  $schedule Optional unix timestamp to schedule the call
     */
    public function spool(CallFile $call, $schedule = false);
}
