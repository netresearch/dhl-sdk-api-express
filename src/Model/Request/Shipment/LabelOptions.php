<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\LabelOptionsInterface;

class LabelOptions implements LabelOptionsInterface
{
    /**
     * @var bool
     */
    private $waybillDocumentRequested;

    public function __construct(bool $waybillDocumentRequested)
    {
        $this->waybillDocumentRequested = $waybillDocumentRequested;
    }

    public function isWaybillDocumentRequested(): bool
    {
        return $this->waybillDocumentRequested;
    }
}
