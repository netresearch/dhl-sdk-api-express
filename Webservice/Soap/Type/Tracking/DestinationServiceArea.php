<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * DestinationServiceArea class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class DestinationServiceArea
{
    /**
     * @var string
     */
    protected $ServiceAreaCode;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var string
     */
    protected $FacilityCode;

    /**
     * @var string
     */
    protected $InboundSortCode;

    /**
     * @return string
     */
    public function getServiceAreaCode()
    {
        return $this->ServiceAreaCode;
    }

    /**
     * @param string $ServiceAreaCode
     *
     * @return self
     */
    public function setServiceAreaCode($ServiceAreaCode)
    {
        $this->ServiceAreaCode = $ServiceAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacilityCode()
    {
        return $this->FacilityCode;
    }

    /**
     * @param string $FacilityCode
     * @return self
     */
    public function setFacilityCode($FacilityCode)
    {
        $this->FacilityCode = $FacilityCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getInboundSortCode()
    {
        return $this->InboundSortCode;
    }

    /**
     * @param string $InboundSortCode
     * @return self
     */
    public function setInboundSortCode($InboundSortCode)
    {
        $this->InboundSortCode = $InboundSortCode;

        return $this;
    }
}
