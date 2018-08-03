<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class ArrayOfCondition implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Condition[] $ArrayOfConditionItem
     */
    protected $ArrayOfConditionItem = null;

    /**
     * @param Condition[] $ArrayOfConditionItem
     */
    public function __construct(array $ArrayOfConditionItem)
    {
      $this->ArrayOfConditionItem = $ArrayOfConditionItem;
    }

    /**
     * @return Condition[]
     */
    public function getArrayOfConditionItem()
    {
      return $this->ArrayOfConditionItem;
    }

    /**
     * @param Condition[] $ArrayOfConditionItem
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ArrayOfCondition
     */
    public function setArrayOfConditionItem(array $ArrayOfConditionItem)
    {
      $this->ArrayOfConditionItem = $ArrayOfConditionItem;
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
      return isset($this->ArrayOfConditionItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Condition
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfConditionItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Condition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfConditionItem[] = $value;
      } else {
        $this->ArrayOfConditionItem[$offset] = $value;
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
      unset($this->ArrayOfConditionItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Condition Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfConditionItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfConditionItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfConditionItem);
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
      reset($this->ArrayOfConditionItem);
    }

    /**
     * Countable implementation
     *
     * @return Condition Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfConditionItem);
    }

}
