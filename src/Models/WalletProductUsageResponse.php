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

class WalletProductUsageResponse implements \JsonSerializable
{
    /**
     * @var WalletProductUsageTemplate[]
     */
    private $walletTemplates;

    /**
     * @var WalletProductUsageTemplate[]
     */
    private $pricePointOverrides;

    /**
     * @var ActiveWallets
     */
    private $activeWallets;

    /**
     * @param WalletProductUsageTemplate[] $walletTemplates
     * @param WalletProductUsageTemplate[] $pricePointOverrides
     * @param ActiveWallets $activeWallets
     */
    public function __construct(array $walletTemplates, array $pricePointOverrides, ActiveWallets $activeWallets)
    {
        $this->walletTemplates = $walletTemplates;
        $this->pricePointOverrides = $pricePointOverrides;
        $this->activeWallets = $activeWallets;
    }

    /**
     * Returns Wallet Templates.
     * Wallet templates billing through this product at its default price point.
     *
     * @return WalletProductUsageTemplate[]
     */
    public function getWalletTemplates(): array
    {
        return $this->walletTemplates;
    }

    /**
     * Sets Wallet Templates.
     * Wallet templates billing through this product at its default price point.
     *
     * @required
     * @maps wallet_templates
     *
     * @param WalletProductUsageTemplate[] $walletTemplates
     */
    public function setWalletTemplates(array $walletTemplates): void
    {
        $this->walletTemplates = $walletTemplates;
    }

    /**
     * Returns Price Point Overrides.
     * Wallet templates billing through this product at a price point other than the default.
     *
     * @return WalletProductUsageTemplate[]
     */
    public function getPricePointOverrides(): array
    {
        return $this->pricePointOverrides;
    }

    /**
     * Sets Price Point Overrides.
     * Wallet templates billing through this product at a price point other than the default.
     *
     * @required
     * @maps price_point_overrides
     *
     * @param WalletProductUsageTemplate[] $pricePointOverrides
     */
    public function setPricePointOverrides(array $pricePointOverrides): void
    {
        $this->pricePointOverrides = $pricePointOverrides;
    }

    /**
     * Returns Active Wallets.
     */
    public function getActiveWallets(): ActiveWallets
    {
        return $this->activeWallets;
    }

    /**
     * Sets Active Wallets.
     *
     * @required
     * @maps active_wallets
     */
    public function setActiveWallets(ActiveWallets $activeWallets): void
    {
        $this->activeWallets = $activeWallets;
    }

    /**
     * Converts the WalletProductUsageResponse object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProductUsageResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProductUsageResponse',
            [
                'walletTemplates' => $this->walletTemplates,
                'pricePointOverrides' => $this->pricePointOverrides,
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
        $json['wallet_templates']      = $this->walletTemplates;
        $json['price_point_overrides'] = $this->pricePointOverrides;
        $json['active_wallets']        = $this->activeWallets;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
