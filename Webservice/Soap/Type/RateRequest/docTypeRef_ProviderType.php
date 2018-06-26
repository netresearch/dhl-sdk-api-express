<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_ProviderType
{

    /**
     * @var docTypeRef_NotificationType3 $Notification
     */
    protected $Notification = null;

    /**
     * @var docTypeRef_ServiceType[] $Service
     */
    protected $Service = null;

    /**
     * @var _x0040_code3 $code
     */
    protected $code = null;

    /**
     * @param docTypeRef_NotificationType3 $Notification
     * @param _x0040_code3 $code
     */
    public function __construct($Notification, $code)
    {
      $this->Notification = $Notification;
      $this->code = $code;
    }

    /**
     * @return docTypeRef_NotificationType3
     */
    public function getNotification()
    {
      return $this->Notification;
    }

    /**
     * @param docTypeRef_NotificationType3 $Notification
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ProviderType
     */
    public function setNotification($Notification)
    {
      $this->Notification = $Notification;
      return $this;
    }

    /**
     * @return docTypeRef_ServiceType[]
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param docTypeRef_ServiceType[] $Service
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ProviderType
     */
    public function setService(array $Service = null)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return _x0040_code3
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param _x0040_code3 $code
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ProviderType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
