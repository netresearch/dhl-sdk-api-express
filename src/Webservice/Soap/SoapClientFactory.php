<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

/**
 * SOAP Client Factory.
 *
 * Prepare the SOAP client for web service access.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapClientFactory
{
    const RATEBOOK_TEST_WSDL = 'https://wsbexpress.dhl.com/sndpt/expressRateBook?WSDL';
    const RATEBOOK_PROD_WSDL = 'https://wsbexpress.dhl.com/gbl/expressRateBook?WSDL';

    const TRACK_TEST_WSDL = 'https://wsbexpress.dhl.com/sndpt/glDHLExpressTrack?WSDL';
    const TRACK_PROD_WSDL = 'https://wsbexpress.dhl.com/gbl/glDHLExpressTrack?WSDL';

    /**
     * @param string $username
     * @param string $password
     * @param string $wsdl
     * @param string $request
     *
     * @return Client
     * @throws \SoapFault
     */
    public function create($username, $password, $wsdl = '', $request = '')
    {
        $wsdl = $wsdl ?: self::RATEBOOK_PROD_WSDL;

        $options = [
            'features'           => SOAP_SINGLE_ELEMENT_ARRAYS,
            'trace'              => true, // Enable to log requests
            'exceptions'         => true,
            'soap_version'       => SOAP_1_1,
            'connection_timeout' => 10,
            'encoding'           => 'UTF-8',
            'cache_wsdl'         => WSDL_CACHE_DISK,
            'classmap'           => ClassMap::get($request),
        ];

        $authFactory = new AuthHeaderFactory();
        $authHeader = $authFactory->create($username, $password);

        $client = new Client($wsdl, $options);
        $client->__setSoapHeaders([$authHeader]);

        return $client;
    }
}
