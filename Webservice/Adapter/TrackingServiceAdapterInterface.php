<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Adapter;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;

/**
 * Tracking Service Adapter Interface.
 *
 * DHL Express web services support SOAP and REST access. Choose one.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface TrackingServiceAdapterInterface
{
    /**
     * @param TrackingRequestInterface $request
     * @return TrackingResponseInterface
     * @throws \InvalidArgumentException
     */
    public function getTrackingInformation(TrackingRequestInterface $request);
}
