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

class ListPublicKeysResponse implements \JsonSerializable
{
    /**
     * @var PublicKey[]|null
     */
    private $chargifyJsKeys;

    /**
     * @var ListPublicKeysMeta|null
     */
    private $meta;

    /**
     * Returns Chargify Js Keys.
     *
     * @return PublicKey[]|null
     */
    public function getChargifyJsKeys(): ?array
    {
        return $this->chargifyJsKeys;
    }

    /**
     * Sets Chargify Js Keys.
     *
     * @maps chargify_js_keys
     *
     * @param PublicKey[]|null $chargifyJsKeys
     */
    public function setChargifyJsKeys(?array $chargifyJsKeys): void
    {
        $this->chargifyJsKeys = $chargifyJsKeys;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ?ListPublicKeysMeta
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?ListPublicKeysMeta $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Converts the ListPublicKeysResponse object to a human-readable string representation.
     *
     * @return string The string representation of the ListPublicKeysResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListPublicKeysResponse',
            [
                'chargifyJsKeys' => $this->chargifyJsKeys,
                'meta' => $this->meta,
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
        if (isset($this->chargifyJsKeys)) {
            $json['chargify_js_keys'] = $this->chargifyJsKeys;
        }
        if (isset($this->meta)) {
            $json['meta']             = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
