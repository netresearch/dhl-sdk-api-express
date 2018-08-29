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
     * @var int
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
     * @param int    $AWBNumber
     * @param Status $Status
     */
    public function __construct($AWBNumber, Status $Status)
    {
        $this->AWBNumber = $AWBNumber;
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getAWBNumber()
    {
        return $this->AWBNumber;
    }

    /**
     * @param string $AWBNumber
     *
     * @return self
     */
    public function setAWBNumber($AWBNumber)
    {
        $this->AWBNumber = $AWBNumber;

        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param Status $Status
     * @return self
     */
    public function setStatus(Status $Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * @return ShipmentInfo|null
     */
    public function getShipmentInfo()
    {
        return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfo|null $ShipmentInfo
     * @return self
     */
    public function setShipmentInfo(ShipmentInfo $ShipmentInfo)
    {
        $this->ShipmentInfo = $ShipmentInfo;

        return $this;
    }

    /**
     * @return TrackingPieces|null
     */
    public function getPieces()
    {
        return $this->Pieces;
    }

    /**
     * @param TrackingPieces|null $Pieces
     * @return self
     */
    public function setPieces(TrackingPieces $Pieces)
    {
        $this->Pieces = $Pieces;

        return $this;
    }
}
