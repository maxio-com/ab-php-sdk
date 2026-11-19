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

class CreateWalletRequest implements \JsonSerializable
{
    /**
     * @var Wallet1
     */
    private $wallet;

    /**
     * @param Wallet1 $wallet
     */
    public function __construct(Wallet1 $wallet)
    {
        $this->wallet = $wallet;
    }

    /**
     * Returns Wallet.
     */
    public function getWallet(): Wallet1
    {
        return $this->wallet;
    }

    /**
     * Sets Wallet.
     *
     * @required
     * @maps wallet
     */
    public function setWallet(Wallet1 $wallet): void
    {
        $this->wallet = $wallet;
    }

    /**
     * Converts the CreateWalletRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateWalletRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateWalletRequest',
            ['wallet' => $this->wallet, 'additionalProperties' => $this->additionalProperties]
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
        $json['wallet'] = $this->wallet;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
