<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value;

/**
 * The SpecialServices section communicates additional shipping services, such as
 * Insurance (or Shipment Value Protection).
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Services
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
    public function getService(): array
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
    public function setService(array $service): Services
    {
        $this->Service = $service;
        return $this;
    }
}
