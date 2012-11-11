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
 * Event triggered when an action ShowDialPlan is issued.
 */
class ListDialplanEvent extends EventMessage
{
    /**
     * Returns key: 'Context'.
     *
     * @return string
     */
    public function getContext()
    {
        return $this->getKey('Context');
    }

    /**
     * Returns key: 'Extension'.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->getKey('Extension');
    }

    /**
     * Returns key: 'Priority'.
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->getKey('Priority');
    }

    /**
     * Returns key: 'Application'.
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->getKey('Application');
    }

    /**
     * Returns key: 'AppData'.
     *
     * @return string
     */
    public function getApplicationData()
    {
        return $this->getKey('AppData');
    }

    /**
     * Returns key: 'Registrar'.
     *
     * @return string
     */
    public function getRegistrar()
    {
        return $this->getKey('Registrar');
    }

    /**
     * Returns key: 'IncludeContext'.
     *
     * @return string
     */
    public function getIncludeContext()
    {
        return $this->getKey('IncludeContext');
    }
}
