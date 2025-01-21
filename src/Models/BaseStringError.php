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
 * The error is base if it is not directly associated with a single attribute.
 */
class BaseStringError implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $base;

    /**
     * Returns Base.
     *
     * @return string[]|null
     */
    public function getBase(): ?array
    {
        return $this->base;
    }

    /**
     * Sets Base.
     *
     * @maps base
     *
     * @param string[]|null $base
     */
    public function setBase(?array $base): void
    {
        $this->base = $base;
    }

    /**
     * Converts the BaseStringError object to a human-readable string representation.
     *
     * @return string The string representation of the BaseStringError object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BaseStringError',
            ['base' => $this->base, 'additionalProperties' => $this->additionalProperties]
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
        if (isset($this->base)) {
            $json['base'] = $this->base;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
