<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * OriginServiceArea class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class OriginServiceArea
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
    protected $OutboundSortCode;

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
    public function getOutboundSortCode()
    {
        return $this->OutboundSortCode;
    }

    /**
     * @param string $OutboundSortCode
     * @return self
     */
    public function setOutboundSortCode($OutboundSortCode)
    {
        $this->OutboundSortCode = $OutboundSortCode;

        return $this;
    }
}
