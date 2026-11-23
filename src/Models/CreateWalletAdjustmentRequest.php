<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

/**
 * A signed correction to a specific grant's balance, or to an overdraft entry's usage, intended for
 * support and ops use.
 */
class CreateWalletAdjustmentRequest implements \JsonSerializable
{
    /**
     * @var Adjustment
     */
    private $adjustment;

    /**
     * @param Adjustment $adjustment
     */
    public function __construct(Adjustment $adjustment)
    {
        $this->adjustment = $adjustment;
    }

    /**
     * Returns Adjustment.
     */
    public function getAdjustment(): Adjustment
    {
        return $this->adjustment;
    }

    /**
     * Sets Adjustment.
     *
     * @required
     * @maps adjustment
     */
    public function setAdjustment(Adjustment $adjustment): void
    {
        $this->adjustment = $adjustment;
    }

    /**
     * Converts the CreateWalletAdjustmentRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateWalletAdjustmentRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateWalletAdjustmentRequest',
            ['adjustment' => $this->adjustment, 'additionalProperties' => $this->additionalProperties]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json['adjustment'] = $this->adjustment;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
