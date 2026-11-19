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
 * The metering meter this wallet is paired with, or `null` for a wallet with no meter. Set on create
 * and immutable afterward.
 */
class Meter implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var string|null
     */
    private $conversionRate;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Conversion Rate.
     * How many wallet units one meter unit is worth, as a decimal string. Defaults to `"1.0"`.
     */
    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }

    /**
     * Sets Conversion Rate.
     * How many wallet units one meter unit is worth, as a decimal string. Defaults to `"1.0"`.
     *
     * @maps conversion_rate
     */
    public function setConversionRate(?string $conversionRate): void
    {
        $this->conversionRate = $conversionRate;
    }

    /**
     * Converts the Meter object to a human-readable string representation.
     *
     * @return string The string representation of the Meter object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Meter',
            [
                'id' => $this->id,
                'name' => $this->name,
                'handle' => $this->handle,
                'conversionRate' => $this->conversionRate,
                'additionalProperties' => $this->additionalProperties
            ]
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
        if (isset($this->id)) {
            $json['id']              = $this->id;
        }
        if (isset($this->name)) {
            $json['name']            = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']          = $this->handle;
        }
        if (isset($this->conversionRate)) {
            $json['conversion_rate'] = $this->conversionRate;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
