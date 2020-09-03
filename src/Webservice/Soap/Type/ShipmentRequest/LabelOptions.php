<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Api\Data\Request\Shipment\LabelOptionsInterface;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestWaybillDocument;

/**
 * The LabelOptions section
 *
 * @api
 * @author   Daniel Fairbrother <dfairbrother@datto.com>
 * @link     https://www.datto.com
 */
class LabelOptions implements LabelOptionsInterface
{
    /**
     * The request waybill document option.
     *
     * @var RequestWaybillDocument
     */
    private $RequestWaybillDocument;

    /**
     * Constructor.
     *
     * @param string $requestWaybillDocument The request waybill document (either Y/N or true/false)
     */
    public function __construct($requestWaybillDocument)
    {
        $this->setRequestWaybillDocument($requestWaybillDocument);
    }

    /**
     * Returns the request waybill document option.
     *
     * @return RequestWaybillDocument
     */
    public function getRequestWaybillDocument()
    {
        return $this->RequestWaybillDocument;
    }

    /**
     * Sets the delivery option.
     *
     * @param string $requestWaybillDocument The delivery option
     *
     * @return self
     */
    public function setRequestWaybillDocument($requestWaybillDocument)
    {
        $this->RequestWaybillDocument = $requestWaybillDocument;
        return $this;
    }
}
