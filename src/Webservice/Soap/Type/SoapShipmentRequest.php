<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Common\ClientDetail;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\RequestedShipment;

/**
 * The shipment create request.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapShipmentRequest
{
    /**
     * The message id.
     *
     * @var null|string
     */
    private $MessageId;

    /**
     * The client detail instance.
     *
     * @var null|ClientDetail
     */
    private $ClientDetail;

    /**
     * The requested shipment instance.
     *
     * @var RequestedShipment
     */
    private $RequestedShipment;

    /**
     * Constructor.
     *
     * @param RequestedShipment $requestedShipment The requested shipment instance
     */
    public function __construct(RequestedShipment $requestedShipment)
    {
        $this->setRequestedShipment($requestedShipment);
    }

    /**
     * Returns the message id.
     *
     * @return null|string
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }

    /**
     * Sets the message id.
     *
     * @param string $messageId The message id
     *
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->MessageId = $messageId;
        return $this;
    }

    /**
     * Returns the client detail instance.
     *
     * @return null|ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }

    /**
     * Sets the client detail instance.
     *
     * @param ClientDetail $clientDetail The client detail instance
     *
     * @return self
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }

    /**
     * Returns the requested shipment instance.
     *
     * @return RequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }

    /**
     * Sets the requested shipment instance.
     *
     * @param RequestedShipment $requestedShipment The requested shipment instance.
     *
     * @return self
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
}
