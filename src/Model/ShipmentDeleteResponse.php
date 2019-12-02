<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;

/**
 * The shipment delete response.
 *
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentDeleteResponse implements ShipmentDeleteResponseInterface
{
    /**
     * The success response message.
     *
     * @var string
     */
    private $message;

    /**
     * The success response code.
     *
     * @var int
     */
    private $code;

    /**
     * Constructor.
     *
     * @param string $message The success message
     * @param int    $code    The success code
     */
    public function __construct(
        $message,
        $code
    ) {
        $this->message = $message;
        $this->code    = $code;
    }

    public function getMessage()
    {
        return (string) $this->message;
    }

    public function isSuccess()
    {
        return $this->code === 0;
    }
}
