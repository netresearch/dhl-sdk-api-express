<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceFault class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PieceFault
{
    /**
     * @var string
     */
    protected $PieceID;

    /**
     * @var string
     */
    protected $ConditionCode;

    /**
     * @var string
     */
    protected $ConditionData;

    /**
     * @param string $PieceID
     * @param string $ConditionCode
     * @param string $ConditionData
     */
    public function __construct($PieceID, $ConditionCode, $ConditionData)
    {
        $this->PieceID = $PieceID;
        $this->ConditionCode = $ConditionCode;
        $this->ConditionData = $ConditionData;
    }

    /**
     * @return string
     */
    public function getPieceID()
    {
        return $this->PieceID;
    }

    /**
     * @param string $PieceID
     *
     * @return self
     */
    public function setPieceID($PieceID)
    {
        $this->PieceID = $PieceID;

        return $this;
    }

    /**
     * @return string
     */
    public function getConditionCode()
    {
        return $this->ConditionCode;
    }

    /**
     * @param string $ConditionCode
     * @return self
     */
    public function setConditionCode($ConditionCode)
    {
        $this->ConditionCode = $ConditionCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getConditionData()
    {
        return $this->ConditionData;
    }

    /**
     * @param string $ConditionData
     * @return self
     */
    public function setConditionData($ConditionData)
    {
        $this->ConditionData = $ConditionData;

        return $this;
    }
}
