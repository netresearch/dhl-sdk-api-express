<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * PackagesType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PackagesType
{
    /**
     * @var RequestedPackagesType
     */
    protected $RequestedPackages;

    /**
     * @param RequestedPackagesType $RequestedPackages
     */
    public function __construct(RequestedPackagesType $RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
    }

    /**
     * @return RequestedPackagesType
     */
    public function getRequestedPackages(): RequestedPackagesType
    {
        return $this->RequestedPackages;
    }

    /**
     * @param RequestedPackagesType $RequestedPackages
     * @return self
     */
    public function setRequestedPackages(RequestedPackagesType $RequestedPackages): self
    {
        $this->RequestedPackages = $RequestedPackages;
        return $this;
    }
}
