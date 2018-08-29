<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Model\ShipmentResponse;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\LabelImage;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults\PackageResult;
use Dhl\Express\Webservice\Soap\Type\SoapShipmentResponse;

/**
 * Shipment Response Mapper.
 *
 * Transform the SOAP response type into shipment objects suitable for further processing.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentResponseMapper
{
    /**
     * Maps the SOAP response to the API model.
     *
     * @param SoapShipmentResponse $shipmentResponse The SOAP response
     *
     * @return ShipmentResponseInterface
     *
     * @throws ShipmentRequestException
     */
    public function map(SoapShipmentResponse $shipmentResponse)
    {
        if ($notifications = $shipmentResponse->getNotification()) {
            $errorMessage = '';

            // FIXME Maybe throw only a single notification as exception instead of concatenating them together? Or chain
            //       them in reverse order together and setting the in each exception the previous exception parameter
            foreach ($notifications as $notification) {
                if ($notification->isError()) {
                    $errorMessage .= $notification->getMessage() . PHP_EOL;
                }
            }

            if ($errorMessage) {
                throw new ShipmentRequestException($errorMessage);
            }
        }

        $labelData       = '';
        $trackingNumbers = [];

        /** @var LabelImage[] $labelImage */
        if ($labelImage = $shipmentResponse->getLabelImage()) {
            $labelData = $labelImage[0]->getGraphicImage();
        }

        $packageResult = $shipmentResponse->getPackagesResult();

        /** @var PackageResult[] $packageResults */
        if ($packageResult && ($packageResults = $packageResult->getPackageResult())) {
            foreach ($packageResults as $packageResult) {
                $trackingNumbers[] = $packageResult->getTrackingNumber();
            }
        }

        $shipmentIdentificationNumber = $shipmentResponse->getShipmentIdentificationNumber() ?: '';
        $dispatchConfirmationNumber   = $shipmentResponse->getDispatchConfirmationNumber()   ?: '';

        return new ShipmentResponse(
            $labelData,
            $trackingNumbers,
            $shipmentIdentificationNumber,
            $dispatchConfirmationNumber
        );
    }
}
