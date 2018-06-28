<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request;

use Dhl\Express\Webservice\Soap\ArrayInterface;
use Dhl\Express\Webservice\Soap\Request\RateRequest\ClientDetail;
use Dhl\Express\Webservice\Soap\Request\RateRequest\RequestedShipment;

/**
 * The rate request.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequest implements ArrayInterface
{
    /**
     * Client detail instance.
     * 
     * @var null|ClientDetail
     */
    private $ClientDetail;

    /**
     * Requested shipment instance.
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
    public function getClientDetail(): ?ClientDetail
    {
        return $this->ClientDetail;
    }

    /**
     * Sets the client detail instance.
     * 
     * @param ClientDetail $clientDetail
     *
     * @return self
     */
    public function setClientDetail(ClientDetail $clientDetail): RateRequest
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }

    /**
     * Returns the requested shipment instance.
     * 
     * @return RequestedShipment
     */
    public function getRequestedShipment(): RequestedShipment
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
    public function setRequestedShipment(RequestedShipment $requestedShipment): RateRequest
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }

    /**
     * Returns a array representation of the object used for JSON encoding.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'ClientDetail'      => $this->getClientDetail() ? $this->getClientDetail()->toArray() : null,
            'RequestedShipment' => $this->getRequestedShipment()->toArray(),
        ];
    }
}
