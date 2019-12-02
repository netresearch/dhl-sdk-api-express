<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Common\Notification;

/**
 * The shipment delete response.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapShipmentDeleteResponse
{
    /**
     * The response notifications.
     *
     * @var Notification[]
     */
    protected $Notification;

    /**
     * Returns the response notification.
     *
     * @return Notification[]
     */
    public function getNotification()
    {
        return $this->Notification;
    }
}
