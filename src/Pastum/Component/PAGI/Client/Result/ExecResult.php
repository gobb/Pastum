<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAGI\Client\Result;

use Pastum\Component\PAGI\Exception\ExecuteCommandException;

/**
 * This decorated result adds the functionality to check for an exec result.
 */
class ExecResult extends ResultDecorator
{
    /**
     * Constructor.
     *
     * @param ResultInterface $result Result to decorate
     */
    public function __construct(ResultInterface $result)
    {
        parent::__construct($result);

        if ($result->isResult(-2)) {
            throw new ExecuteCommandException('Failed to execute');
        }
    }
}
