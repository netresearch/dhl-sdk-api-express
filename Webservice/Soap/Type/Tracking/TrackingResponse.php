<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * The tracking response.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function getResponse(): Response
    {
        return $this->Response;
    }

    /**
     * @param Response $Response
     * @return self
     */
    public function setResponse(Response $Response): self
    {
        $this->Response = $Response;

        return $this;
    }

    /**
     * @return AWBInfoCollection
     */
    public function getAWBInfo(): AWBInfoCollection
    {
        return $this->AWBInfo;
    }

    /**
     * @param AWBInfoCollection $AWBInfo
     * @return self
     */
    public function setAWBInfo(AWBInfoCollection $AWBInfo): self
    {
        $this->AWBInfo = $AWBInfo;

        return $this;
    }

    /**
     * @return Fault|null
     */
    public function getFault(): ?Fault
    {
        return $this->Fault;
    }

    /**
     * @param Fault $Fault
     * @return self
     */
    public function setFault(Fault $Fault): self
    {
        $this->Fault = $Fault;

        return $this;
    }
}
