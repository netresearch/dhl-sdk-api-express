<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class GblDHLExpressTrack extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'TrackingRequest' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\TrackingRequest',
      'Request' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\Request',
      'ServiceHeader' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ServiceHeader',
      'ArrayOfAWBNumber' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfAWBNumber',
      'ArrayOfTrackingPieceID' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfTrackingPieceID',
      'TrackingResponse' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\TrackingResponse',
      'Response' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\Response',
      'AWBInfo' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\AWBInfo',
      'Status' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\Status',
      'Condition' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\Condition',
      'ArrayOfCondition' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfCondition',
      'ShipmentInfo' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ShipmentInfo',
      'OriginServiceArea' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\OriginServiceArea',
      'DestinationServiceArea' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\DestinationServiceArea',
      'ShipmentEvent' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ShipmentEvent',
      'ServiceEvent' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ServiceEvent',
      'ServiceArea' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ServiceArea',
      'ArrayOfShipmentEvent' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfShipmentEvent',
      'Reference' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\Reference',
      'TrackingPieces' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\TrackingPieces',
      'PieceInfo' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\PieceInfo',
      'PieceDetails' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\PieceDetails',
      'PieceEvent' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\PieceEvent',
      'ArrayOfPieceEvent' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfPieceEvent',
      'ArrayOfPieceInfo' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfPieceInfo',
      'ArrayOfAWBInfo' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfAWBInfo',
      'Fault' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\Fault',
      'PieceFault' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\PieceFault',
      'ArrayOfPieceFault' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ArrayOfPieceFault',
      'trackShipmentRequest' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\trackShipmentRequest',
      'pubTrackingRequest' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\pubTrackingRequest',
      'trackShipmentRequestResponse' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\trackShipmentRequestResponse',
      'pubTrackingResponse' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\pubTrackingResponse',
      'ShipperReference' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Tracking\\ShipperReference',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://wsbexpress.dhl.com/sndpt/glDHLExpressTrack?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param trackShipmentRequest $parameters
     * @return trackShipmentRequestResponse
     */
    public function trackShipmentRequest(trackShipmentRequest $parameters)
    {
      return $this->__soapCall('trackShipmentRequest', array($parameters));
    }

}
