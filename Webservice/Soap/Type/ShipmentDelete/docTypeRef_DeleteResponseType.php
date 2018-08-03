<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentDelete;

class docTypeRef_DeleteResponseType
{

    /**
     * @var docTypeRef_NotificationType $Notification
     */
    protected $Notification = null;

    /**
     * @param docTypeRef_NotificationType $Notification
     */
    public function __construct($Notification)
    {
      $this->Notification = $Notification;
    }

    /**
     * @return docTypeRef_NotificationType
     */
    public function getNotification()
    {
      return $this->Notification;
    }

    /**
     * @param docTypeRef_NotificationType $Notification
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteResponseType
     */
    public function setNotification($Notification)
    {
      $this->Notification = $Notification;
      return $this;
    }

}
