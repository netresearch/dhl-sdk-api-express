<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * AWBInfo class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class AWBInfo
{
    /**
     * @var string
     */
    protected $AWBNumber;

    /**
     * @var Status
     */
    protected $Status;

    /**
     * @var ShipmentInfo
     */
    protected $ShipmentInfo;

    /**
     * @var TrackingPieces
     */
    protected $Pieces;

    /**
     * @param string $AWBNumber
     * @param Status $Status
     */
    public function __construct(string $AWBNumber, Status $Status)
    {
        $this->AWBNumber = $AWBNumber;
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getAWBNumber(): string
    {
        return $this->AWBNumber;
    }

    /**
     * @param string $AWBNumber
     * @return self
     */
    public function setAWBNumber(string $AWBNumber): self
    {
        $this->AWBNumber = $AWBNumber;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->Status;
    }

    /**
     * @param Status $Status
     * @return self
     */
    public function setStatus(Status $Status): self
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return ShipmentInfo
     */
    public function getShipmentInfo(): ShipmentInfo
    {
        return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfo $ShipmentInfo
     * @return self
     */
    public function setShipmentInfo(ShipmentInfo $ShipmentInfo): self
    {
        $this->ShipmentInfo = $ShipmentInfo;
        return $this;
    }

    /**
     * @return TrackingPieces
     */
    public function getPieces(): TrackingPieces
    {
        return $this->Pieces;
    }

    /**
     * @param TrackingPieces $Pieces
     * @return self
     */
    public function setPieces(TrackingPieces $Pieces): self
    {
        $this->Pieces = $Pieces;
        return $this;
    }
}
