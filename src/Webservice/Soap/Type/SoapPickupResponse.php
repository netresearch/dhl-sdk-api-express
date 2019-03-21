<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Pickup\NotificationType;

/**
 * Soap Pickup Response
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapPickupResponse
{
    /**
     * @var NotificationType[]
     */
    protected $Notification;

    /**
     * @var string
     */
    protected $DispatchConfirmationNumber;

    /**
     * @param NotificationType[] $Notification
     */
    public function __construct(array $Notification)
    {
        $this->Notification = $Notification;
    }

    /**
     * @return NotificationType[]
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * @param NotificationType[] $Notification
     * @return self
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
     * @return self
     */
    public function setDispatchConfirmationNumber($DispatchConfirmationNumber)
    {
        $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
        return $this;
    }
}
