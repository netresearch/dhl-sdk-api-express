<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\PickupResponseInterface;

/**
 * Pickup response.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PickupResponse implements PickupResponseInterface
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * PickupResponse constructor.
     *
     * @param string $code
     * @param string $message
     */
    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * Return the code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Return the message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
