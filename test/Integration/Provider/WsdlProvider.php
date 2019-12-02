<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Provider;

/**
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class WsdlProvider
{
    /**
     * @return string
     */
    public static function getWsdlFile()
    {
        return __DIR__ . '/_files/expressRateBook.wsdl';
    }

    /**
     * @return string
     */
    public static function getTrackingWsdlFile()
    {
        return __DIR__ . '/_files/glDHLExpressTrack.wsdl';
    }
}
