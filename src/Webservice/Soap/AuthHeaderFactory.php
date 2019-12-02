<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

/**
 * SOAP Authentication Header Factory.
 *
 * Prepare the SOAP client for web service access.
 *
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class AuthHeaderFactory
{
    const WSS_NS = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
    const WSU_NS = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';

    /**
     * Create ws-security SOAP header
     *
     * @link http://php.net/manual/en/soapclient.soapclient.php#114976
     *
     * @param string $username
     * @param string $password
     *
     * @return \SoapHeader
     */
    public function create($username, $password)
    {
        $created = gmdate('Y-m-d\TH:i:s\Z');
        $nonce = mt_rand();
        $passdigest = base64_encode(
            pack('H*', sha1(pack('H*', $nonce) . pack('a*', $created) . pack('a*', $password)))
        );

        $auth = new \stdClass();
        $auth->Username = new \SoapVar($username, XSD_STRING, '', self::WSS_NS, '', self::WSS_NS);
        $auth->Password = new \SoapVar($password, XSD_STRING, '', self::WSS_NS, '', self::WSS_NS);
        $auth->Nonce = new \SoapVar($passdigest, XSD_STRING, '', self::WSS_NS, '', self::WSS_NS);
        $auth->Created = new \SoapVar($created, XSD_STRING, '', self::WSS_NS, '', self::WSU_NS);
        $authVar = new \SoapVar($auth, SOAP_ENC_OBJECT, '', self::WSS_NS, 'UsernameToken', self::WSS_NS);

        $usernameToken = new \stdClass();
        $usernameToken->UsernameToken = $authVar;
        $usernameTokenVar = new \SoapVar(
            $usernameToken,
            SOAP_ENC_OBJECT,
            '',
            self::WSS_NS,
            'UsernameToken',
            self::WSS_NS
        );

        $securityVar = new \SoapVar($usernameTokenVar, SOAP_ENC_OBJECT, '', self::WSS_NS, 'Security', self::WSS_NS);

        return new \SoapHeader(self::WSS_NS, 'Security', $securityVar, true);
    }
}
