<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * Condition class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
