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
 * ListCategories action message.
 */
class ListCategoriesAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $file File to dump categories from
     */
    public function __construct($file)
    {
        parent::__construct('ListCategories');

        $this->setKey('Filename', $file);
    }
}
