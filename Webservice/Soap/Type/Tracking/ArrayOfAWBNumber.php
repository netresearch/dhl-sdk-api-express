<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class ArrayOfAWBNumber implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AWBNumber[] $ArrayOfAWBNumberItem
     */
    protected $ArrayOfAWBNumberItem = null;

    /**
     * @param AWBNumber[] $ArrayOfAWBNumberItem
     */
    public function __construct(array $ArrayOfAWBNumberItem)
    {
      $this->ArrayOfAWBNumberItem = $ArrayOfAWBNumberItem;
    }

    /**
     * @return AWBNumber[]
     */
    public function getArrayOfAWBNumberItem()
    {
      return $this->ArrayOfAWBNumberItem;
    }

    /**
     * @param AWBNumber[] $ArrayOfAWBNumberItem
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfAWBNumber
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
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ArrayOfAWBNumberItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AWBNumber
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfAWBNumberItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AWBNumber $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
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
     * @return AWBNumber Return the current element
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
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfAWBNumberItem);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
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
     * @return AWBNumber Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfAWBNumberItem);
    }

}
