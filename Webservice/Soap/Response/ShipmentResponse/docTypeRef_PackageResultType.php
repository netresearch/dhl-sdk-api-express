<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_PackageResultType
{

    /**
     * @var TrackingNumber $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var _x0040_number2 $number
     */
    protected $number = null;

    /**
     * @param TrackingNumber $TrackingNumber
     * @param _x0040_number2 $number
     */
    public function __construct($TrackingNumber, $number)
    {
      $this->TrackingNumber = $TrackingNumber;
      $this->number = $number;
    }

    /**
     * @return TrackingNumber
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param TrackingNumber $TrackingNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_PackageResultType
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return _x0040_number2
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param _x0040_number2 $number
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_PackageResultType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
