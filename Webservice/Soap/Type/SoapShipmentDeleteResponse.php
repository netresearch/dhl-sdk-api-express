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
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapShipmentDeleteResponse
{
    /**
     * The response notifications.
     *
     * @var Notification
     */
    protected $Notification;

    /**
     * Returns the response notification.
     *
     * @return Notification
     */
    public function getNotification()
    {
        return $this->Notification;
    }
}
