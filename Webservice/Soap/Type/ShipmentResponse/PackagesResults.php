<?php
/**
* See LICENSE.md for license details.
*/
namespace Dhl\Express\Webservice\Soap\Type\ShipmentResponse;

use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults\PackageResult;

/**
 * The packages result provides the DHL piece ID associated to each RequestedPackage from the SoapShipmentRequest.
 * In this case, the TrackingNumber is the Piece ID returned from the service. In order to tie the RequestedPackages
 * from the SoapShipmentRequest with the PackageResult in the response, the @number attribute is used to referentially
 * link the request and result packages.
*
* @api
* @package  Dhl\Express\Api
* @author   Rico Sonntag <rico.sonntag@netresearch.de>
* @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
* @link     https://www.netresearch.de/
*/
class PackagesResults
{
    /**
     * The package result list.
     *
     * @var array|PackageResult[]
     */
    private $PackageResult;

    /**
     * Returns the package result list.
     *
     * @return array|PackageResult[]
     */
    public function getPackageResult()
    {
        return $this->PackageResult;
    }
}
