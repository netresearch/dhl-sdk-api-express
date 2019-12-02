<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceInfoCollection class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PieceInfoCollection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var PieceInfo[]
     */
    protected $ArrayOfPieceInfoItem = [];

    /**
     * @return PieceInfo[]
     */
    public function getArrayOfPieceInfoItem()
    {
        return $this->ArrayOfPieceInfoItem;
    }

    /**
     * @param PieceInfo[] $ArrayOfPieceInfoItem
     * @return self
     */
    public function setArrayOfPieceInfoItem(array $ArrayOfPieceInfoItem = [])
    {
        $this->ArrayOfPieceInfoItem = $ArrayOfPieceInfoItem;

        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return bool true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->ArrayOfPieceInfoItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PieceInfo
     */
    public function offsetGet($offset)
    {
        return $this->ArrayOfPieceInfoItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PieceInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->ArrayOfPieceInfoItem[] = $value;
        } else {
            $this->ArrayOfPieceInfoItem[$offset] = $value;
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
        unset($this->ArrayOfPieceInfoItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PieceInfo Return the current element
     */
    public function current()
    {
        return current($this->ArrayOfPieceInfoItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfPieceInfoItem);
    }

    /**
     * Iterator implementation
     *
     * @return bool Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     *
     * @return int|string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrayOfPieceInfoItem);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->ArrayOfPieceInfoItem);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
        return count($this->ArrayOfPieceInfoItem);
    }
}
