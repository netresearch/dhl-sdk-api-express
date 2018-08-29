<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * ServiceHeader class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ServiceHeader
{
    /**
     * @var string
     */
    protected $MessageTime;

    /**
     * @var string
     */
    protected $MessageReference;

    /**
     * @param string $MessageTime
     * @param string $MessageReference
     */
    public function __construct($MessageTime, $MessageReference)
    {
        $this->MessageTime = $MessageTime;
        $this->MessageReference = $MessageReference;
    }

    /**
     * @return string
     */
    public function getMessageTime()
    {
        return $this->MessageTime;
    }

    /**
     * @param string $MessageTime
     *
     * @return self
     */
    public function setMessageTime($MessageTime)
    {
        $this->MessageTime = $MessageTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessageReference()
    {
        return $this->MessageReference;
    }

    /**
     * @param string $MessageReference
     * @return self
     */
    public function setMessageReference($MessageReference)
    {
        $this->MessageReference = $MessageReference;

        return $this;
    }
}
