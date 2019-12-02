<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Common\Notification;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\LabelImage;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults;

/**
 * The shipment create response.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapShipmentResponse
{
    /**
     * The response notifications.
     *
     * @var Notification[]
     */
    private $Notification;

    /**
     * The packages result.
     *
     * @var null|PackagesResults
     */
    private $PackagesResult;

    /**
     * A list of label images.
     *
     * @var null|LabelImage[]
     */
    private $LabelImage;

    /**
     * The shipment identification number (also named air way bill (AWB)). This number can be used to track
     * the progress of the shipment on the DHL website.
     *
     * @var null|string
     */
    private $ShipmentIdentificationNumber;

    /**
     * The booking reference number. This number should be used when interacting with the DHL customer
     * service regarding the pickup process.
     *
     * @var null|string
     */
    private $DispatchConfirmationNumber;

    /**
     * Returns the response notification.
     *
     * @return Notification[] Array of Notification
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * Returns the packages result.
     *
     * @return null|PackagesResults
     */
    public function getPackagesResult()
    {
        return $this->PackagesResult;
    }

    /**
     * Returns the list of label images.
     *
     * @return null|LabelImage[] Array of LabelImage
     */
    public function getLabelImage()
    {
        return $this->LabelImage;
    }

    /**
     * Returns the shipment identification number.
     *
     * @return null|string
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->ShipmentIdentificationNumber;
    }

    /**
     * Returns the dispatch confirmation number.
     *
     * @return null|string
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->DispatchConfirmationNumber;
    }
}
