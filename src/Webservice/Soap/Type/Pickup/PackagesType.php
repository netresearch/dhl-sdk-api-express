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
    public function getRequestedPackages()
    {
        return $this->RequestedPackages;
    }

    /**
     * @param RequestedPackagesType $RequestedPackages
     * @return self
     */
    public function setRequestedPackages(RequestedPackagesType $RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
        return $this;
    }
}
