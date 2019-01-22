<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages;

/**
 * The packages section details the weight and dimensions of the individual pieces of the shipment.
 * For example, the shipper may tender a single shipment with multiple pieces, and each piece may have a
 * distinct shipping label. In this context, a RequestedPackage node represents each individual piece,
 * and there is a limitation of 50 RequestedPackage nodes in the request.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Packages
{
    /**
     * The list of requested packages.
     *
     * @var RequestedPackages[]
     */
    private $RequestedPackages;

    /**
     * Constructor.
     *
     * @param RequestedPackages[] $RequestedPackages requested packages
     */
    public function __construct(array $RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
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
     * @param RequestedPackages[] $requestedPackages Requested packages
     *
     * @return self
     */
    public function setRequestedPackages(array $requestedPackages)
    {
        $this->RequestedPackages = $requestedPackages;
        return $this;
    }
}
