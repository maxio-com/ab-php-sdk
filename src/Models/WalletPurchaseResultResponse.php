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

class WalletPurchaseResultResponse implements \JsonSerializable
{
    /**
     * @var WalletPurchase[]
     */
    private $walletPurchases;

    /**
     * @var string
     */
    private $balance;

    /**
     * @param WalletPurchase[] $walletPurchases
     * @param string $balance
     */
    public function __construct(array $walletPurchases, string $balance)
    {
        $this->walletPurchases = $walletPurchases;
        $this->balance = $balance;
    }

    /**
     * Returns Wallet Purchases.
     *
     * @return WalletPurchase[]
     */
    public function getWalletPurchases(): array
    {
        return $this->walletPurchases;
    }

    /**
     * Sets Wallet Purchases.
     *
     * @required
     * @maps wallet_purchases
     *
     * @param WalletPurchase[] $walletPurchases
     */
    public function setWalletPurchases(array $walletPurchases): void
    {
        $this->walletPurchases = $walletPurchases;
    }

    /**
     * Returns Balance.
     * The wallet's new balance, as a decimal string.
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     * The wallet's new balance, as a decimal string.
     *
     * @required
     * @maps balance
     */
    public function setBalance(string $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Converts the WalletPurchaseResultResponse object to a human-readable string representation.
     *
     * @return string The string representation of the WalletPurchaseResultResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletPurchaseResultResponse',
            [
                'walletPurchases' => $this->walletPurchases,
                'balance' => $this->balance,
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
        $json['wallet_purchases'] = $this->walletPurchases;
        $json['balance']          = $this->balance;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
