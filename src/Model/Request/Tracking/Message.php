<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request\Tracking;

/**
 * Tracking message.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Message implements \Dhl\Express\Api\Data\Request\Tracking\MessageInterface
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
        return $this->time;
    }

    public function getReference()
    {
        return $this->reference;
    }
}
