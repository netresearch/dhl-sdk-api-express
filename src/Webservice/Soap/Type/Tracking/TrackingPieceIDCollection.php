<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * TrackingPieceIDCollection class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingPieceIDCollection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var string[]
     */
    protected $ArrayOfTrackingPieceIDItem = [];

    /**
     * @param string[] $ArrayOfTrackingPieceIDItem
     */
    public function __construct(array $ArrayOfTrackingPieceIDItem)
    {
        $this->ArrayOfTrackingPieceIDItem = $ArrayOfTrackingPieceIDItem;
    }

    /**
     * @return string[]
     */
    public function getArrayOfTrackingPieceIDItem()
    {
        return $this->ArrayOfTrackingPieceIDItem;
    }

    /**
     * @param string[] $ArrayOfTrackingPieceIDItem
     * @return self
     */
    public function setArrayOfTrackingPieceIDItem(array $ArrayOfTrackingPieceIDItem)
    {
        $this->ArrayOfTrackingPieceIDItem = $ArrayOfTrackingPieceIDItem;

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
        return isset($this->ArrayOfTrackingPieceIDItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    public function offsetGet($offset)
    {
        return $this->ArrayOfTrackingPieceIDItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param string $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->ArrayOfTrackingPieceIDItem[] = $value;
        } else {
            $this->ArrayOfTrackingPieceIDItem[$offset] = $value;
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
        unset($this->ArrayOfTrackingPieceIDItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return string Return the current element
     */
    public function current()
    {
        return current($this->ArrayOfTrackingPieceIDItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfTrackingPieceIDItem);
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
        return key($this->ArrayOfTrackingPieceIDItem);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->ArrayOfTrackingPieceIDItem);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
        return count($this->ArrayOfTrackingPieceIDItem);
    }
}
