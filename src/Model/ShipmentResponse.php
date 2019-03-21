<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\ShipmentResponseInterface;

/**
 * Shipment Response.
 *
 * @package  Dhl\Express\Model
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

    /**
     * @return string
     */
    public function getLabelData()
    {
        return $this->labelData;
    }

    /**
     * @return string[]
     */
    public function getTrackingNumbers()
    {
        return $this->trackingNumbers;
    }

    /**
     * @return string
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->shipmentIdentificationNumber;
    }

    /**
     * @return string
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->dispatchConfirmationNumber;
    }
}
