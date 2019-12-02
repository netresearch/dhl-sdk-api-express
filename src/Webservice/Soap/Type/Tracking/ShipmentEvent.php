<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * ShipmentEvent class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentEvent
{
    /**
     * @var string
     */
    protected $Date;

    /**
     * @var string
     */
    protected $Time;

    /**
     * @var ServiceEvent
     */
    protected $ServiceEvent;

    /**
     * @var string
     */
    protected $Signatory;

    /**
     * @var ServiceArea
     */
    protected $ServiceArea;

    /**
     * @param string       $Date
     * @param string       $Time
     * @param ServiceEvent $ServiceEvent
     * @param ServiceArea  $ServiceArea
     */
    public function __construct(
        $Date,
        $Time,
        ServiceEvent $ServiceEvent,
        ServiceArea $ServiceArea
    ) {
        $this->Date = $Date;
        $this->Time = $Time;
        $this->ServiceEvent = $ServiceEvent;
        $this->ServiceArea = $ServiceArea;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     *
     * @return self
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * @param string $Time
     * @return self
     */
    public function setTime($Time)
    {
        $this->Time = $Time;

        return $this;
    }

    /**
     * @return ServiceEvent
     */
    public function getServiceEvent()
    {
        return $this->ServiceEvent;
    }

    /**
     * @param ServiceEvent $ServiceEvent
     * @return self
     */
    public function setServiceEvent(ServiceEvent $ServiceEvent)
    {
        $this->ServiceEvent = $ServiceEvent;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }

    /**
     * @param string $Signatory
     * @return self
     */
    public function setSignatory($Signatory)
    {
        $this->Signatory = $Signatory;

        return $this;
    }

    /**
     * @return ServiceArea
     */
    public function getServiceArea()
    {
        return $this->ServiceArea;
    }

    /**
     * @param ServiceArea $ServiceArea
     * @return self
     */
    public function setServiceArea(ServiceArea $ServiceArea)
    {
        $this->ServiceArea = $ServiceArea;

        return $this;
    }
}
