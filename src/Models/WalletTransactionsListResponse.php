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

class WalletTransactionsListResponse implements \JsonSerializable
{
    /**
     * @var WalletTransaction[]
     */
    private $walletTransactions;

    /**
     * @var ListPublicKeysMeta
     */
    private $meta;

    /**
     * @param WalletTransaction[] $walletTransactions
     * @param ListPublicKeysMeta $meta
     */
    public function __construct(array $walletTransactions, ListPublicKeysMeta $meta)
    {
        $this->walletTransactions = $walletTransactions;
        $this->meta = $meta;
    }

    /**
     * Returns Wallet Transactions.
     *
     * @return WalletTransaction[]
     */
    public function getWalletTransactions(): array
    {
        return $this->walletTransactions;
    }

    /**
     * Sets Wallet Transactions.
     *
     * @required
     * @maps wallet_transactions
     *
     * @param WalletTransaction[] $walletTransactions
     */
    public function setWalletTransactions(array $walletTransactions): void
    {
        $this->walletTransactions = $walletTransactions;
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
     * Converts the WalletTransactionsListResponse object to a human-readable string representation.
     *
     * @return string The string representation of the WalletTransactionsListResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletTransactionsListResponse',
            [
                'walletTransactions' => $this->walletTransactions,
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
        $json['wallet_transactions'] = $this->walletTransactions;
        $json['meta']                = $this->meta;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
