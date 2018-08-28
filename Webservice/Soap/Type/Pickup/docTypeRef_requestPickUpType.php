<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_requestPickUpType
{

    /**
     * @var MessageId $MessageId
     */
    protected $MessageId;

    /**
     * @var docTypeRef_ClientDetailType2 $ClientDetail
     */
    protected $ClientDetail;

    /**
     * @var docTypeRef_PickUpShipmentType $PickUpShipment
     */
    protected $PickUpShipment;

    /**
     * @param docTypeRef_PickUpShipmentType $PickUpShipment
     */
    public function __construct($PickUpShipment)
    {
        $this->PickUpShipment = $PickUpShipment;
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_requestPickUpType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_requestPickUpType
     */
    public function setClientDetail($ClientDetail)
    {
        $this->ClientDetail = $ClientDetail;
        return $this;
    }

    /**
     * @return docTypeRef_PickUpShipmentType
     */
    public function getPickUpShipment()
    {
        return $this->PickUpShipment;
    }

    /**
     * @param docTypeRef_PickUpShipmentType $PickUpShipment
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_requestPickUpType
     */
    public function setPickUpShipment($PickUpShipment)
    {
        $this->PickUpShipment = $PickUpShipment;
        return $this;
    }
}
