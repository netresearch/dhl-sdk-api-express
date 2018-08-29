<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\ShipmentDeleteRequestBuilderInterface;
use Dhl\Express\Model\ShipmentDeleteRequest;

/**
 * The shipment delete request builder.
 *
 * @package  Dhl\Express\RequestBuilder
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentDeleteRequestBuilder implements ShipmentDeleteRequestBuilderInterface
{
    /**
     * The collected data used to build the request.
     *
     * @var array
     */
    private $data = [];

    /**
     * @inheritdoc
     */
    public function setPickupDate(string $pickupDate)
    {
        $this->data['pickupDate'] = $pickupDate;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setPickupCountry(string $pickupCountry)
    {
        $this->data['pickupCountry'] = $pickupCountry;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setDispatchConfirmationNumber(string $dispatchConfirmationNumber)
    {
        $this->data['dispatchConfirmationNumber'] = $dispatchConfirmationNumber;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setRequesterName(string $requesterName)
    {
        $this->data['requesterName'] = $requesterName;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setReason(string $reasonCode)
    {
        $this->data['reasonCode'] = $reasonCode;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function build()
    {
        //build request
        $request = new ShipmentDeleteRequest(
            $this->data['pickupDate'],
            $this->data['pickupCountry'],
            $this->data['dispatchConfirmationNumber'],
            $this->data['requesterName']
        );

        if (isset($this->data['reason'])) {
            $request->setReason($this->data['reason']);
        }

        $this->data = [];

        return $request;
    }
}
