<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * AWBNumberCollection class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class AWBNumberCollection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var string[]
     */
    protected $ArrayOfAWBNumberItem = [];

    /**
     * @param string[] $ArrayOfAWBNumberItem
     */
    public function __construct(array $ArrayOfAWBNumberItem)
    {
        $this->ArrayOfAWBNumberItem = $ArrayOfAWBNumberItem;
    }

    /**
     * @return string[]
     */
    public function getArrayOfAWBNumberItem()
    {
        return $this->ArrayOfAWBNumberItem;
    }

    /**
     * @param string[] $ArrayOfAWBNumberItem
     * @return self
     */
    public function setArrayOfAWBNumberItem(array $ArrayOfAWBNumberItem)
    {
        $this->ArrayOfAWBNumberItem = $ArrayOfAWBNumberItem;

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
        return isset($this->ArrayOfAWBNumberItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    public function offsetGet($offset)
    {
        return $this->ArrayOfAWBNumberItem[$offset];
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
            $this->ArrayOfAWBNumberItem[] = $value;
        } else {
            $this->ArrayOfAWBNumberItem[$offset] = $value;
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
        unset($this->ArrayOfAWBNumberItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return string Return the current element
     */
    public function current()
    {
        return current($this->ArrayOfAWBNumberItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfAWBNumberItem);
    }

    /**
     * Iterator implementation
     *
     * @return int|string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrayOfAWBNumberItem);
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
        reset($this->ArrayOfAWBNumberItem);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
        return count($this->ArrayOfAWBNumberItem);
    }
}
