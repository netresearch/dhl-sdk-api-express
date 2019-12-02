<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;

/**
 * The special services section communicates additional shipping services, such as
 * Insurance (or Shipment Value Protection).
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SpecialServices implements \Countable
{
    /**
     * The list of special services.
     *
     * @var Service[] $Service
     */
    private $Service = [];

    /**
     * Constructor.
     *
     * @param Service[] $service The special services
     */
    public function __construct(array $service)
    {
        $this->setService($service);
    }

    /**
     * Returns the special services.
     *
     * @return Service[]
     */
    public function getService()
    {
        return $this->Service;
    }

    /**
     * Sets the special services.
     *
     * @param Service[] $service The special services
     *
     * @return self
     */
    public function setService(array $service)
    {
        $this->Service = $service;
        return $this;
    }

    /**
     * Returns the number of services in the list.
     *
     * @return int
     */
    public function count()
    {
        return count($this->Service);
    }
}
