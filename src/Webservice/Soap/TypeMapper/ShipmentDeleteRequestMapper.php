<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Webservice\Soap\Type\SoapShipmentDeleteRequest;

/**
 * The shipment delete request mapper.
 *
 * Transform the shipment request object into SOAP types suitable for API communication.
 *
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentDeleteRequestMapper
{
    /**
     * Maps the API request type to the SOAP request type.
     *
     * @param ShipmentDeleteRequestInterface $request The API request
     *
     * @return SoapShipmentDeleteRequest
     */
    public function map(ShipmentDeleteRequestInterface $request)
    {
        $deleteRequest = new SoapShipmentDeleteRequest(
            $request->getPickupDate()->format('Y-m-d'),
            $request->getPickupCountry(),
            $request->getDispatchConfirmationNumber(),
            $request->getRequesterName()
        );

        if ($reason = $request->getReason()) {
            $deleteRequest->setReason($reason);
        }

        return $deleteRequest;
    }
}
