<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_RateRequestType
{

    /**
     * @var docTypeRef_ClientDetailType3 $ClientDetail
     */
    protected $ClientDetail = null;

    /**
     * @var docTypeRef_RequestedShipmentType2 $RequestedShipment
     */
    protected $RequestedShipment = null;

    /**
     * @param docTypeRef_RequestedShipmentType2 $RequestedShipment
     */
    public function __construct($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
    }

    /**
     * @return docTypeRef_ClientDetailType3
     */
    public function getClientDetail()
    {
      return $this->ClientDetail;
    }

    /**
     * @param docTypeRef_ClientDetailType3 $ClientDetail
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RateRequestType
     */
    public function setClientDetail($ClientDetail)
    {
      $this->ClientDetail = $ClientDetail;
      return $this;
    }

    /**
     * @return docTypeRef_RequestedShipmentType2
     */
    public function getRequestedShipment()
    {
      return $this->RequestedShipment;
    }

    /**
     * @param docTypeRef_RequestedShipmentType2 $RequestedShipment
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RateRequestType
     */
    public function setRequestedShipment($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
      return $this;
    }

}
