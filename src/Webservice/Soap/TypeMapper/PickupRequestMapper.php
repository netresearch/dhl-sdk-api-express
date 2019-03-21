<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\PickupRequestInterface;
use Dhl\Express\Webservice\Soap\Type\Pickup\AddressType;
use Dhl\Express\Webservice\Soap\Type\Pickup\Billing;
use Dhl\Express\Webservice\Soap\Type\Pickup\CommoditiesType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ContactInfoType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ContactType;
use Dhl\Express\Webservice\Soap\Type\Pickup\InternationDetailType;
use Dhl\Express\Webservice\Soap\Type\Pickup\PickUpShipmentType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ShipmentInfoType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ShipType;
use Dhl\Express\Webservice\Soap\Type\SoapPickupRequest;

/**
 * Pickup Request Mapper.
 *
 * Transform the pickup request object into SOAP types suitable for API communication.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PickupRequestMapper
{
    /**
     * @param PickupRequestInterface $pickupRequest
     *
     * @return SoapPickupRequest
     * @throws \InvalidArgumentException
     */
    public function map(PickupRequestInterface $pickupRequest)
    {
        $soapPickupRequest = new SoapPickupRequest(
            new PickUpShipmentType(
                new ShipmentInfoType(
                    $pickupRequest->getServiceType(),
                    new Billing(
                        $pickupRequest->getShipper()->getAccount(),
                        $pickupRequest->getPaymentType()
                    ),
                    $this->mapUOM(
                        $pickupRequest->getPackages()[0]->getWeightUOM(),
                        $pickupRequest->getPackages()[0]->getDimensionsUOM()
                    )
                ),
                $pickupRequest->getPickupTimestamp(),
                new InternationDetailType(
                    new CommoditiesType(
                        $pickupRequest->getCommoditiesDescription()
                    )
                ),
                new ShipType(
                    new ContactInfoType(
                        new ContactType(
                            $pickupRequest->getShipper()->getName(),
                            $pickupRequest->getShipper()->getCompany(),
                            $pickupRequest->getShipper()->getPhone()
                        ),
                        new AddressType(
                            $pickupRequest->getShipper()->getStreetLines(),
                            $pickupRequest->getShipper()->getCity(),
                            $pickupRequest->getShipper()->getPostalCode(),
                            $pickupRequest->getShipper()->getCountryCode()
                        )
                    ),
                    new ContactInfoType(
                        new ContactType(
                            $pickupRequest->getSRecipient()->getName(),
                            $pickupRequest->getSRecipient()->getCompany(),
                            $pickupRequest->getSRecipient()->getPhone()
                        ),
                        new AddressType(
                            $pickupRequest->getSRecipient()->getStreetLines(),
                            $pickupRequest->getSRecipient()->getCity(),
                            $pickupRequest->getSRecipient()->getPostalCode(),
                            $pickupRequest->getSRecipient()->getCountryCode()
                        )
                    )
                ),
                // @TODO(RGE) add packages
                []
            )
        );

        return $soapPickupRequest;
    }

    /**
     * Maps the magento unit of measurement to the DHL express unit of measurement.
     *
     * @param string $weightUOM The unit of measurement for weight
     * @param string $dimensionsUOM The unit of measurement for dimensions
     *
     * @return string
     * @throws \InvalidArgumentException
     */
    private function mapUOM($weightUOM, $dimensionsUOM)
    {
        if (($weightUOM === Package::UOM_WEIGHT_KG) && ($dimensionsUOM === Package::UOM_DIMENSION_CM)) {
            return UnitOfMeasurement::SI;
        }

        if (($weightUOM === Package::UOM_WEIGHT_LB) && ($dimensionsUOM === Package::UOM_DIMENSION_IN)) {
            return UnitOfMeasurement::SU;
        }

        throw new \InvalidArgumentException(
            'All units of measurement have to be consistent (either metric system or US system).'
        );
    }
}
