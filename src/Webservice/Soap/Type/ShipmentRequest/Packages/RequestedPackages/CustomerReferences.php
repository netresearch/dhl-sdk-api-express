<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The customer reference for the piece.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class CustomerReferences extends AlphaNumeric
{
    const MAX_LENGTH = 35;
}
