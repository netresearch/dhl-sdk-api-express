<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * ShipmentEventCollection class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentEventCollection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var ShipmentEvent[]
     */
    protected $ArrayOfShipmentEventItem;

    /**
     * @param ShipmentEvent[] $ArrayOfShipmentEventItem
     */
    public function __construct(array $ArrayOfShipmentEventItem)
    {
      $this->ArrayOfShipmentEventItem = $ArrayOfShipmentEventItem;
    }

    /**
     * @return ShipmentEvent[]
     */
    public function getArrayOfShipmentEventItem(): array
    {
      return $this->ArrayOfShipmentEventItem;
    }

    /**
     * @param ShipmentEvent[] $ArrayOfShipmentEventItem
     * @return self
     */
    public function setArrayOfShipmentEventItem(array $ArrayOfShipmentEventItem): self
    {
      $this->ArrayOfShipmentEventItem = $ArrayOfShipmentEventItem;
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
      return isset($this->ArrayOfShipmentEventItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShipmentEvent
     */
    public function offsetGet($offset): ShipmentEvent
    {
      return $this->ArrayOfShipmentEventItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShipmentEvent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if ($offset === null) {
        $this->ArrayOfShipmentEventItem[] = $value;
      } else {
        $this->ArrayOfShipmentEventItem[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset): void
    {
      unset($this->ArrayOfShipmentEventItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShipmentEvent Return the current element
     */
    public function current(): ShipmentEvent
    {
      return current($this->ArrayOfShipmentEventItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->ArrayOfShipmentEventItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->ArrayOfShipmentEventItem);
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
    public function rewind(): void
    {
      reset($this->ArrayOfShipmentEventItem);
    }

    /**
     * Countable implementation
     *
     * @return ShipmentEvent Return count of elements
     */
    public function count(): ShipmentEvent
    {
      return count($this->ArrayOfShipmentEventItem);
    }
}
