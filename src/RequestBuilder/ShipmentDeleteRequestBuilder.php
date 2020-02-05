<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\RequestBuilder;

use DateTime;
use Dhl\Express\Api\ShipmentDeleteRequestBuilderInterface;
use Dhl\Express\Model\ShipmentDeleteRequest;

/**
 * The shipment delete request builder.
 *
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentDeleteRequestBuilder implements ShipmentDeleteRequestBuilderInterface
{
    /**
     * The collected data used to build the request.
     *
     * @var mixed[]
     */
    private $data = [];

    public function setPickupDate(DateTime $pickupDate)
    {
        $this->data['pickupDate'] = $pickupDate;
        return $this;
    }

    public function setPickupCountry($pickupCountry)
    {
        $this->data['pickupCountry'] = $pickupCountry;
        return $this;
    }

    public function setDispatchConfirmationNumber($dispatchConfirmationNumber)
    {
        $this->data['dispatchConfirmationNumber'] = $dispatchConfirmationNumber;
        return $this;
    }

    public function setRequesterName($requesterName)
    {
        $this->data['requesterName'] = $requesterName;
        return $this;
    }

    public function setReason($reasonCode)
    {
        $this->data['reasonCode'] = $reasonCode;
        return $this;
    }

    public function build()
    {
        //build request
        $request = new ShipmentDeleteRequest(
            $this->data['pickupDate'],
            $this->data['pickupCountry'],
            $this->data['dispatchConfirmationNumber'],
            $this->data['requesterName']
        );

        if (isset($this->data['reasonCode'])) {
            $request->setReason($this->data['reasonCode']);
        }

        $this->data = [];

        return $request;
    }
}
