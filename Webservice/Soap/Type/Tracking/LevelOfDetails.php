<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * LevelOfDetails class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class LevelOfDetails
{
    const __default = 'LAST_CHECK_POINT_ONLY';
    const LAST_CHECK_POINT_ONLY = 'LAST_CHECK_POINT_ONLY';
    const ALL_CHECK_POINTS = 'ALL_CHECK_POINTS';
}
