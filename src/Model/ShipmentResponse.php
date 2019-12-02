<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\ShipmentResponseInterface;

/**
 * Shipment Response.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentResponse implements ShipmentResponseInterface
{
    /**
     * @var string
     */
    private $labelData;

    /**
     * @var string[]
     */
    private $trackingNumbers;

    /**
     * @var string
     */
    private $shipmentIdentificationNumber;

    /**
     * @var string
     */
    private $dispatchConfirmationNumber;

    /**
     * ShipmentResponse constructor.
     *
     * @param string   $labelData
     * @param string[] $trackingNumbers
     * @param string   $shipmentIdentificationNumber
     * @param string   $dispatchConfirmationNumber
     */
    public function __construct(
        $labelData,
        array $trackingNumbers,
        $shipmentIdentificationNumber,
        $dispatchConfirmationNumber
    ) {
        $this->labelData = $labelData;
        $this->trackingNumbers = $trackingNumbers;
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
    }

    public function getLabelData()
    {
        return (string) $this->labelData;
    }

    public function getTrackingNumbers()
    {
        return $this->trackingNumbers;
    }

    public function getShipmentIdentificationNumber()
    {
        return (string) $this->shipmentIdentificationNumber;
    }

    public function getDispatchConfirmationNumber()
    {
        return (string) $this->dispatchConfirmationNumber;
    }
}
