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
     * @return \SoapClient
     */
    public function create(string $username, string $password, string $wsdl = ''): \SoapClient
    {
        $wsdl = $wsdl ?: self::WSDL;

        $options = [
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'trace' => true,
            'classmap' => ClassMap::get(),
        ];

        $client = new \SoapClient($wsdl, $options);

        $authFactory = new AuthHeaderFactory();
        $authHeader = $authFactory->create($username, $password);
        $client->__setSoapHeaders([$authHeader]);

        return $client;
    }
}
