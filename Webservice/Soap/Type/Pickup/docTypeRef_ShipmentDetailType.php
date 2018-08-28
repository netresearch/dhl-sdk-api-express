<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_ShipmentDetailType
{

    /**
     * @var docTypeRef_NotificationType2[] $Notification
     */
    protected $Notification;

    /**
     * @var string $DispatchConfirmationNumber
     */
    protected $DispatchConfirmationNumber;

    /**
     * @param docTypeRef_NotificationType2[] $Notification
     */
    public function __construct(array $Notification)
    {
        $this->Notification = $Notification;
    }

    /**
     * @return docTypeRef_NotificationType2[]
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * @param docTypeRef_NotificationType2[] $Notification
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentDetailType
     */
    public function setNotification(array $Notification)
    {
        $this->Notification = $Notification;
        return $this;
    }

    /**
     * @return string
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->DispatchConfirmationNumber;
    }

    /**
     * @param string $DispatchConfirmationNumber
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentDetailType
     */
    public function setDispatchConfirmationNumber($DispatchConfirmationNumber)
    {
        $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
        return $this;
    }
}
