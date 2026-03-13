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

class Register implements \JsonSerializable
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
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $currencyCode;

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
     * Returns Currency Code.
     * The ISO 4217 currency code (3 character string) representing the currency of invoice transaction.
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Sets Currency Code.
     * The ISO 4217 currency code (3 character string) representing the currency of invoice transaction.
     *
     * @maps currency_code
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * Converts the Register object to a human-readable string representation.
     *
     * @return string The string representation of the Register object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Register',
            [
                'id' => $this->id,
                'maxioId' => $this->maxioId,
                'name' => $this->name,
                'currencyCode' => $this->currencyCode,
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
            $json['id']            = $this->id;
        }
        if (isset($this->maxioId)) {
            $json['maxio_id']      = $this->maxioId;
        }
        if (isset($this->name)) {
            $json['name']          = $this->name;
        }
        if (isset($this->currencyCode)) {
            $json['currency_code'] = $this->currencyCode;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
