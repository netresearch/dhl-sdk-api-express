<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages;

/**
 * The packages section details the weight and dimensions of the individual pieces of the shipment.
 * For example, the shipper may tender a single shipment with multiple pieces, and each piece may have a
 * distinct shipping label. In this context, a RequestedPackage node represents each individual piece,
 * and there is a limitation of 50 RequestedPackage nodes in the request.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Packages
{
    /**
     * The list of requested packages.
     *
     * @var RequestedPackages[]
     */
    private $RequestedPackages = [];

    /**
     * Constructor.
     *
     * @param RequestedPackages[] $requestedPackages List of requested packages
     *
     * @throws \OutOfBoundsException
     */
    public function __construct(array $requestedPackages)
    {
        if (!count($requestedPackages)) {
            throw new \OutOfBoundsException('A shipment must contain at least one package');
        }

        $this->setRequestedPackages($requestedPackages);
    }

    /**
     * Returns the requested packages.
     *
     * @return RequestedPackages[]
     */
    public function getRequestedPackages()
    {
        return $this->RequestedPackages;
    }

    /**
     * Sets the requested packages.
     *
     * @param RequestedPackages[] $requestedPackages List of requested packages
     *
     * @return self
     * @throws \OutOfBoundsException
     */
    public function setRequestedPackages(array $requestedPackages)
    {
        if (count($requestedPackages) > 50) {
            throw new \OutOfBoundsException('A shipment can only contain a maximum of 50 packages');
        }

        $this->RequestedPackages = $requestedPackages;
        return $this;
    }
}
