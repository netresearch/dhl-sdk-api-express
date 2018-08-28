<?php


use Dhl\Express\Webservice\Soap\Type\Pickup\PickUpRequest;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_requestPickUpType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ClientDetailType2;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentInfoType;
use Dhl\Express\Webservice\Soap\Type\Pickup\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_InternationDetailType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_CommoditiesType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PackagesType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_RequestedPackagesType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactInfoType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_DimensionsType;
use Dhl\Express\Webservice\Soap\Type\Pickup\Billing;
use Dhl\Express\Webservice\Soap\Type\Pickup\ShipmentPaymentType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentDetailType;
use Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_NotificationType2;

function autoload_d4a5f32f8a617451a1d816ca2fd77ffc($class)
{
    $classes = array(
        PickUpRequest::class                    => __DIR__ . '/PickUpRequest.php',
        docTypeRef_requestPickUpType::class     => __DIR__ . '/docTypeRef_requestPickUpType.php',
        docTypeRef_ClientDetailType2::class     => __DIR__ . '/docTypeRef_ClientDetailType2.php',
        docTypeRef_PickUpShipmentType::class    => __DIR__ . '/docTypeRef_PickUpShipmentType.php',
        docTypeRef_ShipmentInfoType::class      => __DIR__ . '/docTypeRef_ShipmentInfoType.php',
        UnitOfMeasurement::class                => __DIR__ . '/UnitOfMeasurement.php',
        docTypeRef_InternationDetailType::class => __DIR__ . '/docTypeRef_InternationDetailType.php',
        docTypeRef_CommoditiesType::class       => __DIR__ . '/docTypeRef_CommoditiesType.php',
        docTypeRef_PackagesType::class          => __DIR__ . '/docTypeRef_PackagesType.php',
        docTypeRef_RequestedPackagesType::class => __DIR__ . '/docTypeRef_RequestedPackagesType.php',
        docTypeRef_ShipType::class              => __DIR__ . '/docTypeRef_ShipType.php',
        docTypeRef_ContactInfoType::class       => __DIR__ . '/docTypeRef_ContactInfoType.php',
        docTypeRef_ContactType::class           => __DIR__ . '/docTypeRef_ContactType.php',
        docTypeRef_AddressType::class           => __DIR__ . '/docTypeRef_AddressType.php',
        docTypeRef_DimensionsType::class        => __DIR__ . '/docTypeRef_DimensionsType.php',
        Billing::class                          => __DIR__ . '/Billing.php',
        ShipmentPaymentType::class              => __DIR__ . '/ShipmentPaymentType.php',
        docTypeRef_ShipmentDetailType::class    => __DIR__ . '/docTypeRef_ShipmentDetailType.php',
        docTypeRef_NotificationType2::class     => __DIR__ . '/docTypeRef_NotificationType2.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_d4a5f32f8a617451a1d816ca2fd77ffc');

// Do nothing. The rest is just leftovers from the code generation.
{
}
