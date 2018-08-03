<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response\Tracking;

use Dhl\Express\Api\Data\Response\Tracking\MessageInterface;

/**
 * Tracking message.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     * @param int $time
     * @param string $reference
     */
    public function __construct(int $time, string $reference)
    {
        $this->time = $time;
        $this->reference = $reference;
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function getReference(): string
    {
        return $this->reference;
    }
}