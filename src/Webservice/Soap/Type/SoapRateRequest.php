<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Common\ClientDetail;
use Dhl\Express\Webservice\Soap\Type\RateRequest\RequestedShipment;

/**
 * Soap Rate Request.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapRateRequest
{
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
     * @param RequestedShipment $requestedShipment The requested shipment instance
     *
     * @return self
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
}
