<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * Response class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Response
{
    /**
     * @var ServiceHeader
     */
    protected $ServiceHeader;

    /**
     * @param ServiceHeader $ServiceHeader
     */
    public function __construct(ServiceHeader $ServiceHeader)
    {
        $this->ServiceHeader = $ServiceHeader;
    }

    /**
     * @return ServiceHeader
     */
    public function getServiceHeader()
    {
        return $this->ServiceHeader;
    }

    /**
     * @param ServiceHeader $ServiceHeader
     * @return self
     */
    public function setServiceHeader(ServiceHeader $ServiceHeader)
    {
        $this->ServiceHeader = $ServiceHeader;

        return $this;
    }
}
