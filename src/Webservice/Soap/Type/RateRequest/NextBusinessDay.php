<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

use Dhl\Express\Webservice\Soap\Type\Common\YesNo;

/**
 * The NextBusinessDay field is used to indicate that the Rate Request process should query the next business
 * day for available services if the current request is beyond cutoff, or occurs on a weekend or holiday. There
 * are three possible use cases for this field.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class NextBusinessDay extends YesNo
{
}
