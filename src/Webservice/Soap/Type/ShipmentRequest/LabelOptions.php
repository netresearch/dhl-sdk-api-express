<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestWaybillDocument;

/**
 * The LabelOptions section
 *
 * @api
 * @author Daniel Fairbrother <dfairbrother@datto.com>
 * @link   https://www.datto.com/
 */
class LabelOptions
{
    /**
     * The waybill document request option.
     *
     * @var RequestWaybillDocument
     */
    private $RequestWaybillDocument;

    /**
     * Constructor.
     *
     * @param RequestWaybillDocument $requestWaybillDocument The waybill document request option.
     */
    public function __construct(RequestWaybillDocument $requestWaybillDocument)
    {
        $this->setRequestWaybillDocument($requestWaybillDocument);
    }

    /**
     * Returns the request waybill document option.
     *
     * @return RequestWaybillDocument
     */
    public function getRequestWaybillDocument(): RequestWaybillDocument
    {
        return $this->RequestWaybillDocument;
    }

    /**
     * Sets the delivery option.
     *
     * @param RequestWaybillDocument $requestWaybillDocument The waybill document request option.
     *
     * @return self
     */
    public function setRequestWaybillDocument(RequestWaybillDocument $requestWaybillDocument): LabelOptions
    {
        $this->RequestWaybillDocument = $requestWaybillDocument;
        return $this;
    }
}
