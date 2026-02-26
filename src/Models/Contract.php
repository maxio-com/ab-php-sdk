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
 * Contract linked to the scheduled renewal configuration.
 */
class Contract implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $maxioId;

    /**
     * @var array
     */
    private $number = [];

    /**
     * @var Register|null
     */
    private $register;

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
     * Returns Maxio Id.
     */
    public function getMaxioId(): ?string
    {
        return $this->maxioId;
    }

    /**
     * Sets Maxio Id.
     *
     * @maps maxio_id
     */
    public function setMaxioId(?string $maxioId): void
    {
        $this->maxioId = $maxioId;
    }

    /**
     * Returns Number.
     */
    public function getNumber(): ?string
    {
        if (count($this->number) == 0) {
            return null;
        }
        return $this->number['value'];
    }

    /**
     * Sets Number.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number['value'] = $number;
    }

    /**
     * Unsets Number.
     */
    public function unsetNumber(): void
    {
        $this->number = [];
    }

    /**
     * Returns Register.
     */
    public function getRegister(): ?Register
    {
        return $this->register;
    }

    /**
     * Sets Register.
     *
     * @maps register
     */
    public function setRegister(?Register $register): void
    {
        $this->register = $register;
    }

    /**
     * Converts the Contract object to a human-readable string representation.
     *
     * @return string The string representation of the Contract object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Contract',
            [
                'id' => $this->id,
                'maxioId' => $this->maxioId,
                'number' => $this->getNumber(),
                'register' => $this->register,
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
            $json['id']       = $this->id;
        }
        if (isset($this->maxioId)) {
            $json['maxio_id'] = $this->maxioId;
        }
        if (!empty($this->number)) {
            $json['number']   = $this->number['value'];
        }
        if (isset($this->register)) {
            $json['register'] = $this->register;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
