<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * UnitOfMeasurement class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class UnitOfMeasurement
{
    const __default = 'SI';
<<<<<<< HEAD
    const SI = 'SI';
    const SU = 'SU';
=======
    public const SI = 'SI';
    public const SU = 'SU';
>>>>>>> 575bed9... DHLGW-54 + DHLGW-55: Clean SOAP classes, add Integration test, extend classMap loading
}
