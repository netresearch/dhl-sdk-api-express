<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentDelete;

class docTypeRef_DeleteRequestType
{

    /**
     * @var docTypeRef_ClientDetailType $ClientDetail
     */
    protected $ClientDetail = null;

    /**
     * @var date $PickupDate
     */
    protected $PickupDate = null;

    /**
     * @var CountryCode $PickupCountry
     */
    protected $PickupCountry = null;

    /**
     * @var ConfirmationNumberType $DispatchConfirmationNumber
     */
    protected $DispatchConfirmationNumber = null;

    /**
     * @var PersonName3 $RequestorName
     */
    protected $RequestorName = null;

    /**
     * @var CustomerReferences $Reason
     */
    protected $Reason = null;

    /**
     * @param date $PickupDate
     * @param CountryCode $PickupCountry
     * @param ConfirmationNumberType $DispatchConfirmationNumber
     * @param PersonName3 $RequestorName
     */
    public function __construct($PickupDate, $PickupCountry, $DispatchConfirmationNumber, $RequestorName)
    {
      $this->PickupDate = $PickupDate;
      $this->PickupCountry = $PickupCountry;
      $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
      $this->RequestorName = $RequestorName;
    }

    /**
     * @return docTypeRef_ClientDetailType
     */
    public function getClientDetail()
    {
      return $this->ClientDetail;
    }

    /**
     * @param docTypeRef_ClientDetailType $ClientDetail
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteRequestType
     */
    public function setClientDetail($ClientDetail)
    {
      $this->ClientDetail = $ClientDetail;
      return $this;
    }

    /**
     * @return date
     */
    public function getPickupDate()
    {
      return $this->PickupDate;
    }

    /**
     * @param date $PickupDate
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteRequestType
     */
    public function setPickupDate($PickupDate)
    {
      $this->PickupDate = $PickupDate;
      return $this;
    }

    /**
     * @return CountryCode
     */
    public function getPickupCountry()
    {
      return $this->PickupCountry;
    }

    /**
     * @param CountryCode $PickupCountry
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteRequestType
     */
    public function setPickupCountry($PickupCountry)
    {
      $this->PickupCountry = $PickupCountry;
      return $this;
    }

    /**
     * @return ConfirmationNumberType
     */
    public function getDispatchConfirmationNumber()
    {
      return $this->DispatchConfirmationNumber;
    }

    /**
     * @param ConfirmationNumberType $DispatchConfirmationNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteRequestType
     */
    public function setDispatchConfirmationNumber($DispatchConfirmationNumber)
    {
      $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
      return $this;
    }

    /**
     * @return PersonName3
     */
    public function getRequestorName()
    {
      return $this->RequestorName;
    }

    /**
     * @param PersonName3 $RequestorName
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteRequestType
     */
    public function setRequestorName($RequestorName)
    {
      $this->RequestorName = $RequestorName;
      return $this;
    }

    /**
     * @return CustomerReferences
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param CustomerReferences $Reason
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteRequestType
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
