<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * LevelOfDetails class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class LevelOfDetails
{
    const __DEFAULT = 'LAST_CHECK_POINT_ONLY';
    const LAST_CHECK_POINT_ONLY = 'LAST_CHECK_POINT_ONLY';
    const ALL_CHECK_POINTS = 'ALL_CHECK_POINTS';
}
