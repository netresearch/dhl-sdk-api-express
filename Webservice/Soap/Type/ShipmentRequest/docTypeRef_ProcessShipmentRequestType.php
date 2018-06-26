<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_ProcessShipmentRequestType
{

    /**
     * @var MessageId $MessageId
     */
    protected $MessageId = null;

    /**
     * @var docTypeRef_ClientDetailType2 $ClientDetail
     */
    protected $ClientDetail = null;

    /**
     * @var docTypeRef_RequestedShipmentType $RequestedShipment
     */
    protected $RequestedShipment = null;

    /**
     * @param docTypeRef_RequestedShipmentType $RequestedShipment
     */
    public function __construct($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
    }

    /**
     * @return MessageId
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param MessageId $MessageId
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ProcessShipmentRequestType
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return docTypeRef_ClientDetailType2
     */
    public function getClientDetail()
    {
      return $this->ClientDetail;
    }

    /**
     * @param docTypeRef_ClientDetailType2 $ClientDetail
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ProcessShipmentRequestType
     */
    public function setClientDetail($ClientDetail)
    {
      $this->ClientDetail = $ClientDetail;
      return $this;
    }

    /**
     * @return docTypeRef_RequestedShipmentType
     */
    public function getRequestedShipment()
    {
      return $this->RequestedShipment;
    }

    /**
     * @param docTypeRef_RequestedShipmentType $RequestedShipment
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ProcessShipmentRequestType
     */
    public function setRequestedShipment($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
      return $this;
    }

}
