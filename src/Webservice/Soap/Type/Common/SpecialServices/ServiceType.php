<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The service code type.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ServiceType implements ValueInterface
{
    const NUMBER_OF_CHARS = 2;

    /**
     * Available service types.
     */
    const TYPE_INSURANCE = 'II';
    const TYPE_PAPERLESS = 'WY';
    const TYPE_DOCUMENT_INSURANCE = 'IB';

    /**
     * The service type.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     *
     */
    public function __construct($value)
    {
        if (\strlen($value) !== self::NUMBER_OF_CHARS) {
            throw new \InvalidArgumentException('The argument has to be '.self::NUMBER_OF_CHARS.' letters service type');
        }

        $this->value = $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
