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

class WalletResponse implements \JsonSerializable
{
    /**
     * @var Wallet
     */
    private $wallet;

    /**
     * @param Wallet $wallet
     */
    public function __construct(Wallet $wallet)
    {
        $this->wallet = $wallet;
    }

    /**
     * Returns Wallet.
     * A balance, denominated in the unit of a Wallet Product, owned by a subscription. Grants and
     * recurring funding schedules are embedded so a single read shows the full balance breakdown.
     */
    public function getWallet(): Wallet
    {
        return $this->wallet;
    }

    /**
     * Sets Wallet.
     * A balance, denominated in the unit of a Wallet Product, owned by a subscription. Grants and
     * recurring funding schedules are embedded so a single read shows the full balance breakdown.
     *
     * @required
     * @maps wallet
     */
    public function setWallet(Wallet $wallet): void
    {
        $this->wallet = $wallet;
    }

    /**
     * Converts the WalletResponse object to a human-readable string representation.
     *
     * @return string The string representation of the WalletResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletResponse',
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
