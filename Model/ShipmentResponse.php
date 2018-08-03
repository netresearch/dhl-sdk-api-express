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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     * @param string $labelData
     * @param string[] $trackingNumbers
     * @param string $shipmentIdentificationNumber
     * @param string $dispatchConfirmationNumber
     */
    public function __construct(
        string $labelData,
        array $trackingNumbers,
        string $shipmentIdentificationNumber,
        string $dispatchConfirmationNumber
    ) {
        $this->labelData = $labelData;
        $this->trackingNumbers = $trackingNumbers;
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
    }

    /**
     * @return string
     */
    public function getLabelData(): string
    {
        return $this->labelData;
    }

    /**
     * @return string[]
     */
    public function getTrackingNumbers(): array
    {
        return $this->trackingNumbers;
    }

    /**
     * @return string
     */
    public function getShipmentIdentificationNumber(): string
    {
        return $this->shipmentIdentificationNumber;
    }

    /**
     * @return string
     */
    public function getDispatchConfirmationNumber(): string
    {
        return $this->dispatchConfirmationNumber;
    }
}
