<?php


 function autoload_d4a5f32f8a617451a1d816ca2fd77ffc($class)
{
    $classes = array(
        'Dhl\Express\Webservice\Soap\Type\Pickup\PickUpRequest' => __DIR__ .'/PickUpRequest.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_requestPickUpType' => __DIR__ .'/docTypeRef_requestPickUpType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ClientDetailType2' => __DIR__ .'/docTypeRef_ClientDetailType2.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType' => __DIR__ .'/docTypeRef_PickUpShipmentType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentInfoType' => __DIR__ .'/docTypeRef_ShipmentInfoType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\UnitOfMeasurement' => __DIR__ .'/UnitOfMeasurement.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_InternationDetailType' => __DIR__ .'/docTypeRef_InternationDetailType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_CommoditiesType' => __DIR__ .'/docTypeRef_CommoditiesType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PackagesType' => __DIR__ .'/docTypeRef_PackagesType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_RequestedPackagesType' => __DIR__ .'/docTypeRef_RequestedPackagesType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipType' => __DIR__ .'/docTypeRef_ShipType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactInfoType' => __DIR__ .'/docTypeRef_ContactInfoType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactType' => __DIR__ .'/docTypeRef_ContactType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType' => __DIR__ .'/docTypeRef_AddressType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_DimensionsType' => __DIR__ .'/docTypeRef_DimensionsType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\Billing' => __DIR__ .'/Billing.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\ShipmentPaymentType' => __DIR__ .'/ShipmentPaymentType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ShipmentDetailType' => __DIR__ .'/docTypeRef_ShipmentDetailType.php',
        'Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_NotificationType2' => __DIR__ .'/docTypeRef_NotificationType2.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d4a5f32f8a617451a1d816ca2fd77ffc');

// Do nothing. The rest is just leftovers from the code generation.
{
}
