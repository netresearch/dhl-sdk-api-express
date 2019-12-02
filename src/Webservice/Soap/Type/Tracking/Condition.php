<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * Condition class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Condition
{
    /**
     * @var string
     */
    protected $ConditionCode;

    /**
     * @var string
     */
    protected $ConditionData;

    /**
     * @param string $ConditionCode
     */
    public function __construct($ConditionCode)
    {
        $this->ConditionCode = $ConditionCode;
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
     *
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
