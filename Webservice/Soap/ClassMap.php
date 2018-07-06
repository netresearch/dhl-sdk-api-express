<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Webservice\Soap\Type;

/**
 * SOAP Client Class Map.
 *
 * Map SOAP types to PHP classes.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ClassMap
{
    /**
     * Obtain SOAP types to PHP classes mapping for SOAP responses.
     *
     * @return array|string[]
     */
    public static function get(): array
    {
        return [
            // getRateRequest response
            'docTypeRef_NotificationType3' => Type\Common\Notification::class,
            'docTypeRef_RateResponseType'  => Type\SoapRateResponse::class,
            'docTypeRef_ProviderType'      => Type\RateResponse\Provider::class,
            'docTypeRef_ServiceType'       => Type\RateResponse\Provider\Service::class,
            'docTypeRef_TotalNetType'      => Type\RateResponse\Provider\Service\TotalNet::class,
            'docTypeRef_ChargesType'       => Type\RateResponse\Provider\Service\Charges::class,
            'docTypeRef_ChargeType'        => Type\RateResponse\Provider\Service\Charges\Charge::class,

            // createShipmentRequest response
            'docTypeRef_NotificationType2'   => Type\Common\Notification::class,
            'docTypeRef_ShipmentDetailType'  => Type\ShipmentResponse::class,
            'docTypeRef_PackagesResultsType' => Type\ShipmentResponse\PackagesResults::class,
            'docTypeRef_PackageResultType'   => Type\ShipmentResponse\PackagesResults\PackageResult::class,
            'docTypeRef_LabelImageType'      => Type\ShipmentResponse\LabelImage::class,
        ];
    }
}
