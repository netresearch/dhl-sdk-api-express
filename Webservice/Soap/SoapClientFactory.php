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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapClientFactory
{
    const WSDL = 'https://wsbexpress.dhl.com/sndpt/expressRateBook?WSDL';

    /**
     * @param string $username
     * @param string $password
     * @param string $wsdl
     *
     * @return Client
     */
    public function create($username, $password, $wsdl = '')
    {
        $wsdl = $wsdl ?: self::WSDL;

        $options = [
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'trace' => true, // Enable to log requests
            'exceptions' => true,
            'soap_version' => SOAP_1_1,
            'connection_timeout' => 10,
            'encoding' => 'UTF-8',
            'cache_wsdl' => WSDL_CACHE_DISK,
            'classmap' => ClassMap::get(),
        ];

        $authFactory = new AuthHeaderFactory();
        $authHeader = $authFactory->create($username, $password);

        $client = new Client($wsdl, $options);
        $client->__setSoapHeaders([$authHeader]);

        return $client;
    }
}
