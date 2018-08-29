<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

/**
 * The notification response section.
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
     * Response code: Valid values are 0=SUCCESS, other value=ERROR.
     *
     * @var int
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
     * Returns the response code. Success = 0, Error > 0.
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns TRUE if the notification is an error notification.
     *
     * @return bool
     */
    public function isError()
    {
        return $this->getCode() !== 0;
    }
}
