<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * ShipmentPaymentType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentPaymentType
{
    const __default = 'S';
<<<<<<< HEAD
    const S = 'S';
    const R = 'R';
    const T = 'T';
=======
   public const S = 'S';
   public const R = 'R';
   public const T = 'T';
>>>>>>> 575bed9... DHLGW-54 + DHLGW-55: Clean SOAP classes, add Integration test, extend classMap loading
}
