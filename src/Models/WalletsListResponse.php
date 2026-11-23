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

class WalletsListResponse implements \JsonSerializable
{
    /**
     * @var Wallet[]
     */
    private $wallets;

    /**
     * @var ListPublicKeysMeta
     */
    private $meta;

    /**
     * @param Wallet[] $wallets
     * @param ListPublicKeysMeta $meta
     */
    public function __construct(array $wallets, ListPublicKeysMeta $meta)
    {
        $this->wallets = $wallets;
        $this->meta = $meta;
    }

    /**
     * Returns Wallets.
     *
     * @return Wallet[]
     */
    public function getWallets(): array
    {
        return $this->wallets;
    }

    /**
     * Sets Wallets.
     *
     * @required
     * @maps wallets
     *
     * @param Wallet[] $wallets
     */
    public function setWallets(array $wallets): void
    {
        $this->wallets = $wallets;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ListPublicKeysMeta
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @required
     * @maps meta
     */
    public function setMeta(ListPublicKeysMeta $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Converts the WalletsListResponse object to a human-readable string representation.
     *
     * @return string The string representation of the WalletsListResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletsListResponse',
            [
                'wallets' => $this->wallets,
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
        $json['wallets'] = $this->wallets;
        $json['meta']    = $this->meta;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
