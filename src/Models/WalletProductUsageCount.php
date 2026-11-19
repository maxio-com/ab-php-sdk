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
 * A rollup of what's using this Wallet Product, for the catalog listing.
 */
class WalletProductUsageCount implements \JsonSerializable
{
    /**
     * @var int
     */
    private $walletConfigurations;

    /**
     * @var int
     */
    private $activeWallets;

    /**
     * @param int $walletConfigurations
     * @param int $activeWallets
     */
    public function __construct(int $walletConfigurations, int $activeWallets)
    {
        $this->walletConfigurations = $walletConfigurations;
        $this->activeWallets = $activeWallets;
    }

    /**
     * Returns Wallet Configurations.
     * Number of wallet templates billing through this product, whether or not any wallet has been created
     * from them yet.
     */
    public function getWalletConfigurations(): int
    {
        return $this->walletConfigurations;
    }

    /**
     * Sets Wallet Configurations.
     * Number of wallet templates billing through this product, whether or not any wallet has been created
     * from them yet.
     *
     * @required
     * @maps wallet_configurations
     */
    public function setWalletConfigurations(int $walletConfigurations): void
    {
        $this->walletConfigurations = $walletConfigurations;
    }

    /**
     * Returns Active Wallets.
     * Number of active (non-archived) wallets currently denominated by this product.
     */
    public function getActiveWallets(): int
    {
        return $this->activeWallets;
    }

    /**
     * Sets Active Wallets.
     * Number of active (non-archived) wallets currently denominated by this product.
     *
     * @required
     * @maps active_wallets
     */
    public function setActiveWallets(int $activeWallets): void
    {
        $this->activeWallets = $activeWallets;
    }

    /**
     * Converts the WalletProductUsageCount object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProductUsageCount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProductUsageCount',
            [
                'walletConfigurations' => $this->walletConfigurations,
                'activeWallets' => $this->activeWallets,
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
        $json['wallet_configurations'] = $this->walletConfigurations;
        $json['active_wallets']        = $this->activeWallets;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
