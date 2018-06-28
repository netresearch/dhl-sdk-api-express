<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Response\RateResponse;

/**
 * The notification section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Notification
{
    /**
     * Response message, see Error codes for more details.
     * 
     * @var string
     */
    private $Message;

    /**
     * Notification code: valid values are 0=SUCCESS, other value=ERROR
     *
     * @var string
     */
    private $code;

    /**
     * Returns the response message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Returns the notification code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
