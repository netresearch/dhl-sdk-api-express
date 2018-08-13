<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceEvent class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PieceEvent
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
     * @var ShipperReference
     */
    protected $ShipperReference;

    /**
     * @param string $Date
     * @param string $Time
     * @param ServiceEvent $ServiceEvent
     * @param ServiceArea $ServiceArea
     */
    public function __construct(
        string $Date,
        string $Time,
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
    public function getDate(): string
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return self
     */
    public function setDate(string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->Time;
    }

    /**
     * @param string $Time
     * @return self
     */
    public function setTime(string $Time): self
    {
        $this->Time = $Time;

        return $this;
    }

    /**
     * @return ServiceEvent
     */
    public function getServiceEvent(): ServiceEvent
    {
        return $this->ServiceEvent;
    }

    /**
     * @param ServiceEvent $ServiceEvent
     * @return self
     */
    public function setServiceEvent(ServiceEvent $ServiceEvent): self
    {
        $this->ServiceEvent = $ServiceEvent;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatory(): string
    {
        return $this->Signatory;
    }

    /**
     * @param string $Signatory
     * @return self
     */
    public function setSignatory(string $Signatory): self
    {
        $this->Signatory = $Signatory;

        return $this;
    }

    /**
     * @return ServiceArea
     */
    public function getServiceArea(): ServiceArea
    {
        return $this->ServiceArea;
    }

    /**
     * @param ServiceArea $ServiceArea
     * @return self
     */
    public function setServiceArea(ServiceArea $ServiceArea): self
    {
        $this->ServiceArea = $ServiceArea;

        return $this;
    }

    /**
     * @return ShipperReference
     */
    public function getShipperReference(): ShipperReference
    {
        return $this->ShipperReference;
    }

    /**
     * @param ShipperReference $ShipperReference
     * @return self
     */
    public function setShipperReference(ShipperReference $ShipperReference): self
    {
        $this->ShipperReference = $ShipperReference;

        return $this;
    }
}
