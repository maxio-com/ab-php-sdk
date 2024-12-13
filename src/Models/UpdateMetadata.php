<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateMetadata implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $currentName;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $value;

    /**
     * Returns Current Name.
     */
    public function getCurrentName(): ?string
    {
        return $this->currentName;
    }

    /**
     * Sets Current Name.
     *
     * @maps current_name
     */
    public function setCurrentName(?string $currentName): void
    {
        $this->currentName = $currentName;
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
     * Returns Value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
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
        if (isset($this->currentName)) {
            $json['current_name'] = $this->currentName;
        }
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (isset($this->value)) {
            $json['value']        = $this->value;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
