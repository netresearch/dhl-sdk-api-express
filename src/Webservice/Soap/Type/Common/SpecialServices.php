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
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SpecialServices implements \Countable
{
    /**
     * The list of special services.
     *
     * @var array|Service[] $Service
     */
    private $Service = [];

    /**
     * Constructor.
     *
     * @param array|Service[] $service The special services
     */
    public function __construct(array $service)
    {
        $this->setService($service);
    }

    /**
     * Returns the special services.
     *
     * @return array|Service[]
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
