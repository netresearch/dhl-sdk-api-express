<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\LabelOptionsInterface;


/**
 * LabelOptions Details.
 *
 * @author   Daniel Fairbrother <dfairbrother@datto.com>
 * @link     https://www.datto.com
 */
class LabelOptions implements LabelOptionsInterface
{
    /**
     * The service type.
     *
     * @var string
     */
    private $requestWaybillDocument;

    /**
     * LabelOptions constructor.
     *
     * @param LabelOptions $requestWaybillDocument
     */
    public function __construct(
        $requestWaybillDocument
    ) {
        $this->requestWaybillDocument = $requestWaybillDocument;
    }

    public function getRequestWaybillDocument()
    {
        return (string) $this->requestWaybillDocument;
    }
}
