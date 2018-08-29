<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * Request class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Request
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
