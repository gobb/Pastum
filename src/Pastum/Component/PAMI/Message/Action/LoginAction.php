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
 * Login action message.
 */
class LoginAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $user     AMI username
     * @param string $password AMI password
     */
    public function __construct($user, $password)
    {
        parent::__construct('Login');

        $this->setKey('Username', $user);
        $this->setKey('Secret', $password);
    }
}
