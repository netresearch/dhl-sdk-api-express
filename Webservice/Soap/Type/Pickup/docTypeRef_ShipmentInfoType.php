<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_ShipmentInfoType
{

    /**
     * @var ServiceType $ServiceType
     */
    protected $ServiceType;

    /**
     * @var Billing $Billing
     */
    protected $Billing;

    /**
     * @var UnitOfMeasurement $UnitOfMeasurement
     */
    protected $UnitOfMeasurement;

    /**
     * @param ServiceType $ServiceType
     * @param Billing $Billing
     * @param UnitOfMeasurement $UnitOfMeasurement
     */
    public function __construct($ServiceType, $Billing, $UnitOfMeasurement)
    {
        $this->ServiceType = $ServiceType;
        $this->Billing = $Billing;
        $this->UnitOfMeasurement = $UnitOfMeasurement;
    }

    /**
     * @return ServiceType
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param ServiceType $ServiceType
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentInfoType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentInfoType
     */
    public function setBilling($Billing)
    {
        $this->Billing = $Billing;
        return $this;
    }

    /**
     * @return UnitOfMeasurement
     */
    public function getUnitOfMeasurement()
    {
        return $this->UnitOfMeasurement;
    }

    /**
     * @param UnitOfMeasurement $UnitOfMeasurement
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentInfoType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
        $this->UnitOfMeasurement = $UnitOfMeasurement;
        return $this;
    }
}
