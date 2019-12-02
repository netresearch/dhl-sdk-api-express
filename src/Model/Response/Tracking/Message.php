<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response\Tracking;

use Dhl\Express\Api\Data\Response\Tracking\MessageInterface;

/**
 * Tracking message.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Message implements MessageInterface
{
    /**
     * @var int
     */
    private $time;

    /**
     * @var string
     */
    private $reference;

    /**
     * Message constructor.
     *
     * @param int    $time
     * @param string $reference
     */
    public function __construct($time, $reference)
    {
        $this->time = $time;
        $this->reference = $reference;
    }

    public function getTime()
    {
        return (int) $this->time;
    }

    public function getReference()
    {
        return (string) $this->reference;
    }
}
