<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * TrackingPieces class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingPieces
{
    /**
     * @var PieceInfoCollection
     */
    protected $PieceInfo;

    /**
     * @return PieceInfoCollection
     */
    public function getPieceInfo()
    {
        return $this->PieceInfo;
    }

    /**
     * @param PieceInfoCollection $PieceInfo
     * @return self
     */
    public function setPieceInfo(PieceInfoCollection $PieceInfo)
    {
        $this->PieceInfo = $PieceInfo;

        return $this;
    }
}
