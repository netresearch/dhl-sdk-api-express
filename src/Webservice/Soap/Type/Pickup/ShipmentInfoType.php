<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * ShipmentInfoType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentInfoType
{
    /**
     * @var string
     */
    protected $ServiceType;

    /**
     * @var Billing
     */
    protected $Billing;

    /**
     * @var string
     */
    protected $UnitOfMeasurement;

    /**
     * @param string $ServiceType
     * @param Billing $Billing
     * @param string $UnitOfMeasurement
     */
    public function __construct($ServiceType, Billing $Billing, $UnitOfMeasurement)
    {
        $this->ServiceType = $ServiceType;
        $this->Billing = $Billing;
        $this->UnitOfMeasurement = $UnitOfMeasurement;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return self
     */
    public function setServiceType($ServiceType)
    {
        $this->ServiceType = $ServiceType;
        return $this;
    }

    /**
     * @return Billing
     */
    public function getBilling()
    {
        return $this->Billing;
    }

    /**
     * @param Billing $Billing
     * @return self
     */
    public function setBilling(Billing $Billing)
    {
        $this->Billing = $Billing;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasurement()
    {
        return $this->UnitOfMeasurement;
    }

    /**
     * @param string $UnitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
        $this->UnitOfMeasurement = $UnitOfMeasurement;
        return $this;
    }
}
