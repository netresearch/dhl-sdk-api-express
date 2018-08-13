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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(string $ServiceType, Billing $Billing, string $UnitOfMeasurement)
    {
        $this->ServiceType = $ServiceType;
        $this->Billing = $Billing;
        $this->UnitOfMeasurement = $UnitOfMeasurement;
    }

    /**
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return self
     */
    public function setServiceType(string $ServiceType): self
    {
        $this->ServiceType = $ServiceType;
        return $this;
    }

    /**
     * @return Billing
     */
    public function getBilling(): Billing
    {
        return $this->Billing;
    }

    /**
     * @param Billing $Billing
     * @return self
     */
    public function setBilling(Billing $Billing): self
    {
        $this->Billing = $Billing;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasurement(): string
    {
        return $this->UnitOfMeasurement;
    }

    /**
     * @param string $UnitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement(string $UnitOfMeasurement): self
    {
        $this->UnitOfMeasurement = $UnitOfMeasurement;
        return $this;
    }
}
