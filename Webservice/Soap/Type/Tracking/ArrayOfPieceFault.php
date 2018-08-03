<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class ArrayOfPieceFault implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PieceFault[] $ArrayOfPieceFaultItem
     */
    protected $ArrayOfPieceFaultItem = null;

    /**
     * @param PieceFault[] $ArrayOfPieceFaultItem
     */
    public function __construct(array $ArrayOfPieceFaultItem)
    {
      $this->ArrayOfPieceFaultItem = $ArrayOfPieceFaultItem;
    }

    /**
     * @return PieceFault[]
     */
    public function getArrayOfPieceFaultItem()
    {
      return $this->ArrayOfPieceFaultItem;
    }

    /**
     * @param PieceFault[] $ArrayOfPieceFaultItem
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfPieceFault
     */
    public function setArrayOfPieceFaultItem(array $ArrayOfPieceFaultItem)
    {
      $this->ArrayOfPieceFaultItem = $ArrayOfPieceFaultItem;
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
      return isset($this->ArrayOfPieceFaultItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PieceFault
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfPieceFaultItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PieceFault $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfPieceFaultItem[] = $value;
      } else {
        $this->ArrayOfPieceFaultItem[$offset] = $value;
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
      unset($this->ArrayOfPieceFaultItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PieceFault Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfPieceFaultItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfPieceFaultItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfPieceFaultItem);
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
      reset($this->ArrayOfPieceFaultItem);
    }

    /**
     * Countable implementation
     *
     * @return PieceFault Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfPieceFaultItem);
    }

}
