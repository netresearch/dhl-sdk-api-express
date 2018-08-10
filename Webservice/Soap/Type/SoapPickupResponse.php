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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function getNotification(): array
    {
        return $this->Notification;
    }

    /**
     * @param NotificationType[] $Notification
     * @return self
     */
    public function setNotification(array $Notification): self
    {
        $this->Notification = $Notification;
        return $this;
    }

    /**
     * @return string
     */
    public function getDispatchConfirmationNumber(): string
    {
        return $this->DispatchConfirmationNumber;
    }

    /**
     * @param string $DispatchConfirmationNumber
     * @return self
     */
    public function setDispatchConfirmationNumber(string $DispatchConfirmationNumber): self
    {
        $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
        return $this;
    }
}
