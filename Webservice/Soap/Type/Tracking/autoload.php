<?php


 function autoload_70a4e11b35bedccaa591ae163ff75172($class)
{
    $classes = array(
        'Dhl\Express\Webservice\Soap\Type\Tracking\GblDHLExpressTrack' => __DIR__ .'/GblDHLExpressTrack.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest' => __DIR__ .'/TrackingRequest.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\Request' => __DIR__ .'/Request.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ServiceHeader' => __DIR__ .'/ServiceHeader.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfAWBNumber' => __DIR__ .'/ArrayOfAWBNumber.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfTrackingPieceID' => __DIR__ .'/ArrayOfTrackingPieceID.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\LevelOfDetails' => __DIR__ .'/LevelOfDetails.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\TrackingResponse' => __DIR__ .'/TrackingResponse.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\Response' => __DIR__ .'/Response.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\AWBInfo' => __DIR__ .'/AWBInfo.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\Status' => __DIR__ .'/Status.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\Condition' => __DIR__ .'/Condition.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfCondition' => __DIR__ .'/ArrayOfCondition.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo' => __DIR__ .'/ShipmentInfo.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\OriginServiceArea' => __DIR__ .'/OriginServiceArea.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\DestinationServiceArea' => __DIR__ .'/DestinationServiceArea.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentEvent' => __DIR__ .'/ShipmentEvent.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ServiceEvent' => __DIR__ .'/ServiceEvent.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ServiceArea' => __DIR__ .'/ServiceArea.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfShipmentEvent' => __DIR__ .'/ArrayOfShipmentEvent.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\Reference' => __DIR__ .'/Reference.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\TrackingPieces' => __DIR__ .'/TrackingPieces.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\PieceInfo' => __DIR__ .'/PieceInfo.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails' => __DIR__ .'/PieceDetails.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent' => __DIR__ .'/PieceEvent.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfPieceEvent' => __DIR__ .'/ArrayOfPieceEvent.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfPieceInfo' => __DIR__ .'/ArrayOfPieceInfo.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfAWBInfo' => __DIR__ .'/ArrayOfAWBInfo.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\Fault' => __DIR__ .'/Fault.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\PieceFault' => __DIR__ .'/PieceFault.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfPieceFault' => __DIR__ .'/ArrayOfPieceFault.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\trackShipmentRequest' => __DIR__ .'/trackShipmentRequest.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\pubTrackingRequest' => __DIR__ .'/pubTrackingRequest.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\trackShipmentRequestResponse' => __DIR__ .'/trackShipmentRequestResponse.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\pubTrackingResponse' => __DIR__ .'/pubTrackingResponse.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\WeightUnit' => __DIR__ .'/WeightUnit.php',
        'Dhl\Express\Webservice\Soap\Type\Tracking\ShipperReference' => __DIR__ .'/ShipperReference.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_70a4e11b35bedccaa591ae163ff75172');

// Do nothing. The rest is just leftovers from the code generation.
{
}
