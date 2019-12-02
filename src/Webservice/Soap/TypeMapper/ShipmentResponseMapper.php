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
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
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
        $notification = $shipmentResponse->getNotification();
        if (\is_array($notification)) {
            $notification = array_shift($notification);
        }

        if ($notification !== null && $notification->isError()) {
            throw new ShipmentRequestException($notification->getMessage(), $notification->getCode());
        }

        $labelData       = '';
        $trackingNumbers = [];

        /** @var LabelImage[] $labelImage */
        $labelImage = $shipmentResponse->getLabelImage();
        if ($labelImage) {
            $labelData = $labelImage[0]->getGraphicImage();
        }

        $packageResult = $shipmentResponse->getPackagesResult();
        if ($packageResult) {
            /** @var PackageResult[] $packageResults */
            $packageResults = $packageResult->getPackageResult();
            if ($packageResults) {
                foreach ($packageResults as $packageResult) {
                    $trackingNumbers[] = $packageResult->getTrackingNumber();
                }
            }
        }

        $shipmentIdentificationNumber = $shipmentResponse->getShipmentIdentificationNumber() ?: '';
        $dispatchConfirmationNumber = $shipmentResponse->getDispatchConfirmationNumber() ?: '';

        return new ShipmentResponse(
            $labelData,
            $trackingNumbers,
            $shipmentIdentificationNumber,
            $dispatchConfirmationNumber
        );
    }
}
