<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * The tracking response.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingResponse
{
    /**
     * @var Response
     */
    protected $Response;

    /**
     * @var AWBInfoCollection
     */
    protected $AWBInfo;

    /**
     * @var Fault|null
     */
    protected $Fault;

    /**
     * @param Response $Response
     * @param AWBInfoCollection $AWBInfo
     */
    public function __construct(Response $Response, AWBInfoCollection $AWBInfo)
    {
        $this->Response = $Response;
        $this->AWBInfo = $AWBInfo;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->Response;
    }

    /**
     * @param Response $Response
     * @return self
     */
    public function setResponse(Response $Response)
    {
        $this->Response = $Response;

        return $this;
    }

    /**
     * @return AWBInfoCollection
     */
    public function getAWBInfo()
    {
        return $this->AWBInfo;
    }

    /**
     * @param AWBInfoCollection $AWBInfo
     * @return self
     */
    public function setAWBInfo(AWBInfoCollection $AWBInfo)
    {
        $this->AWBInfo = $AWBInfo;

        return $this;
    }

    /**
     * @return Fault|null
     */
    public function getFault()
    {
        return $this->Fault;
    }

    /**
     * @param Fault $Fault
     * @return self
     */
    public function setFault(Fault $Fault)
    {
        $this->Fault = $Fault;

        return $this;
    }
}
