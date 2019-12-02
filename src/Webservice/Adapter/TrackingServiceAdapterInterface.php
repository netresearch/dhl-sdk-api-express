<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Adapter;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Exception\TrackingRequestException;

/**
 * Tracking Service Adapter Interface.
 *
 * DHL Express web services support SOAP and REST access. Choose one.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface TrackingServiceAdapterInterface
{
    /**
     * @param TrackingRequestInterface $request
     *
     * @return TrackingResponseInterface
     *
     * @throws SoapException
     * @throws TrackingRequestException
     */
    public function getTrackingInformation(TrackingRequestInterface $request);
}
