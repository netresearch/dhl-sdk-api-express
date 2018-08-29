<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceEventCollection class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PieceEventCollection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var PieceEvent[]
     */
    protected $ArrayOfPieceEventItem = [];

    /**
     * @return PieceEvent[]
     */
    public function getArrayOfPieceEventItem(): array
    {
        return $this->ArrayOfPieceEventItem;
    }

    /**
     * @param PieceEvent[] $ArrayOfPieceEventItem
     * @return self
     */
    public function setArrayOfPieceEventItem(array $ArrayOfPieceEventItem = []): self
    {
        $this->ArrayOfPieceEventItem = $ArrayOfPieceEventItem;

        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return bool true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
        return isset($this->ArrayOfPieceEventItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PieceEvent
     */
    public function offsetGet($offset): PieceEvent
    {
        return $this->ArrayOfPieceEventItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PieceEvent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->ArrayOfPieceEventItem[] = $value;
        } else {
            $this->ArrayOfPieceEventItem[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->ArrayOfPieceEventItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PieceEvent Return the current element
     */
    public function current(): PieceEvent
    {
        return current($this->ArrayOfPieceEventItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfPieceEventItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrayOfPieceEventItem);
    }

    /**
     * Iterator implementation
     *
     * @return bool Return the validity of the current position
     */
    public function valid(): bool
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->ArrayOfPieceEventItem);
    }

    /**
     * Countable implementation
     *
     * @return PieceEvent Return count of elements
     */
    public function count(): PieceEvent
    {
        return count($this->ArrayOfPieceEventItem);
    }
}
