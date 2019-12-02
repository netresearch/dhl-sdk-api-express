<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * AWBInfoCollection class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class AWBInfoCollection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var AWBInfo[]
     */
    protected $ArrayOfAWBInfoItem = [];

    /**
     * @param AWBInfo[] $ArrayOfAWBInfoItem
     */
    public function __construct(array $ArrayOfAWBInfoItem)
    {
        $this->ArrayOfAWBInfoItem = $ArrayOfAWBInfoItem;
    }

    /**
     * @return AWBInfo[]
     */
    public function getArrayOfAWBInfoItem()
    {
        return $this->ArrayOfAWBInfoItem;
    }

    /**
     * @param AWBInfo[] $ArrayOfAWBInfoItem
     * @return self
     */
    public function setArrayOfAWBInfoItem(array $ArrayOfAWBInfoItem)
    {
        $this->ArrayOfAWBInfoItem = $ArrayOfAWBInfoItem;

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
        return isset($this->ArrayOfAWBInfoItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AWBInfo
     */
    public function offsetGet($offset)
    {
        return $this->ArrayOfAWBInfoItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AWBInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->ArrayOfAWBInfoItem[] = $value;
        } else {
            $this->ArrayOfAWBInfoItem[$offset] = $value;
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
        unset($this->ArrayOfAWBInfoItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AWBInfo Return the current element
     */
    public function current()
    {
        return current($this->ArrayOfAWBInfoItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfAWBInfoItem);
    }

    /**
     * Iterator implementation
     *
     * @return int|string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrayOfAWBInfoItem);
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
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->ArrayOfAWBInfoItem);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
        return count($this->ArrayOfAWBInfoItem);
    }
}
