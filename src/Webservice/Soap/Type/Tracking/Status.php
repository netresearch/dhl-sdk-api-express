<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * Status class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Status
{
    /**
     * @var string
     */
    protected $ActionStatus;

    /**
     * @var ConditionCollection|null
     */
    protected $Condition;

    /**
     * @param string $ActionStatus
     */
    public function __construct($ActionStatus)
    {
        $this->ActionStatus = $ActionStatus;
    }

    /**
     * @return string
     */
    public function getActionStatus()
    {
        return $this->ActionStatus;
    }

    /**
     * @param string $ActionStatus
     *
     * @return self
     */
    public function setActionStatus($ActionStatus)
    {
        $this->ActionStatus = $ActionStatus;

        return $this;
    }

    /**
     * @return ConditionCollection|null
     */
    public function getCondition()
    {
        return $this->Condition;
    }

    /**
     * @param ConditionCollection $Condition
     * @return self
     */
    public function setCondition(ConditionCollection $Condition)
    {
        $this->Condition = $Condition;

        return $this;
    }
}
