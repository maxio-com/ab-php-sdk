<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AttributeError implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $attribute;

    /**
     * @param string[] $attribute
     */
    public function __construct(array $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * Returns Attribute.
     *
     * @return string[]
     */
    public function getAttribute(): array
    {
        return $this->attribute;
    }

    /**
     * Sets Attribute.
     *
     * @required
     * @maps attribute
     *
     * @param string[] $attribute
     */
    public function setAttribute(array $attribute): void
    {
        $this->attribute = $attribute;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['attribute'] = $this->attribute;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
