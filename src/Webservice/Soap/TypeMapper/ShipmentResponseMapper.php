<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Model\ShipmentResponse;
use Dhl\Express\Webservice\Soap\Type\Common\Notification;
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
        if (\is_array($notification) && !empty($notification)) {
            /** @var Notification $notification */
            $notification = current($notification);
        }

        if ($notification->isError()) {
            throw new ShipmentRequestException($notification->getMessage(), $notification->getCode());
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
