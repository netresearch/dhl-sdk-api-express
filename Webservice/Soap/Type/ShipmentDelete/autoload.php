<?php


 function autoload_f764742480ef3dc959032a4441a640be($class)
{
    $classes = array(
        'Dhl\Express\Webservice\Soap\Type\ShipmentDelete\GblExpressRateBook' => __DIR__ .'/GblExpressRateBook.php',
        'Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteRequestType' => __DIR__ .'/docTypeRef_DeleteRequestType.php',
        'Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_DeleteResponseType' => __DIR__ .'/docTypeRef_DeleteResponseType.php',
        'Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_ClientDetailType' => __DIR__ .'/docTypeRef_ClientDetailType.php',
        'Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_NotificationType' => __DIR__ .'/docTypeRef_NotificationType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f764742480ef3dc959032a4441a640be');

// Do nothing. The rest is just leftovers from the code generation.
{
}
