<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PaymentCollectionMethodChanged implements \JsonSerializable
{
    /**
     * @var string
     */
    private $previousValue;

    /**
     * @var string
     */
    private $currentValue;

    /**
     * @param string $previousValue
     * @param string $currentValue
     */
    public function __construct(string $previousValue, string $currentValue)
    {
        $this->previousValue = $previousValue;
        $this->currentValue = $currentValue;
    }

    /**
     * Returns Previous Value.
     */
    public function getPreviousValue(): string
    {
        return $this->previousValue;
    }

    /**
     * Sets Previous Value.
     *
     * @required
     * @maps previous_value
     */
    public function setPreviousValue(string $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * Returns Current Value.
     */
    public function getCurrentValue(): string
    {
        return $this->currentValue;
    }

    /**
     * Sets Current Value.
     *
     * @required
     * @maps current_value
     */
    public function setCurrentValue(string $currentValue): void
    {
        $this->currentValue = $currentValue;
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
        $json['previous_value'] = $this->previousValue;
        $json['current_value']  = $this->currentValue;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
