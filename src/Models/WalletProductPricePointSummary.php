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
 * A summary of the Wallet Product's default price point, for rendering a catalog listing without a
 * separate price points call.
 */
class WalletProductPricePointSummary implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $archivedCount;

    /**
     * @var array
     */
    private $pricingScheme = [];

    /**
     * @var int|null
     */
    private $tierCount;

    /**
     * @var array
     */
    private $entryPrice = [];

    /**
     * @var array
     */
    private $finalPrice = [];

    /**
     * Returns Archived Count.
     * Number of archived price points on this Wallet Product.
     */
    public function getArchivedCount(): ?int
    {
        return $this->archivedCount;
    }

    /**
     * Sets Archived Count.
     * Number of archived price points on this Wallet Product.
     *
     * @maps archived_count
     */
    public function setArchivedCount(?int $archivedCount): void
    {
        $this->archivedCount = $archivedCount;
    }

    /**
     * Returns Pricing Scheme.
     * The default price point's pricing scheme. `null` if the Wallet Product has no default price point.
     */
    public function getPricingScheme(): ?string
    {
        if (count($this->pricingScheme) == 0) {
            return null;
        }
        return $this->pricingScheme['value'];
    }

    /**
     * Sets Pricing Scheme.
     * The default price point's pricing scheme. `null` if the Wallet Product has no default price point.
     *
     * @maps pricing_scheme
     */
    public function setPricingScheme(?string $pricingScheme): void
    {
        $this->pricingScheme['value'] = $pricingScheme;
    }

    /**
     * Unsets Pricing Scheme.
     * The default price point's pricing scheme. `null` if the Wallet Product has no default price point.
     */
    public function unsetPricingScheme(): void
    {
        $this->pricingScheme = [];
    }

    /**
     * Returns Tier Count.
     * Number of price brackets on the default price point. A `per_unit` scheme always stores exactly one
     * synthesized bracket, so this is `1` for `per_unit`, not `0`.
     */
    public function getTierCount(): ?int
    {
        return $this->tierCount;
    }

    /**
     * Sets Tier Count.
     * Number of price brackets on the default price point. A `per_unit` scheme always stores exactly one
     * synthesized bracket, so this is `1` for `per_unit`, not `0`.
     *
     * @maps tier_count
     */
    public function setTierCount(?int $tierCount): void
    {
        $this->tierCount = $tierCount;
    }

    /**
     * Returns Entry Price.
     * The unit price of the default price point's first bracket, as a decimal string. `null` if there are
     * no brackets.
     */
    public function getEntryPrice(): ?string
    {
        if (count($this->entryPrice) == 0) {
            return null;
        }
        return $this->entryPrice['value'];
    }

    /**
     * Sets Entry Price.
     * The unit price of the default price point's first bracket, as a decimal string. `null` if there are
     * no brackets.
     *
     * @maps entry_price
     */
    public function setEntryPrice(?string $entryPrice): void
    {
        $this->entryPrice['value'] = $entryPrice;
    }

    /**
     * Unsets Entry Price.
     * The unit price of the default price point's first bracket, as a decimal string. `null` if there are
     * no brackets.
     */
    public function unsetEntryPrice(): void
    {
        $this->entryPrice = [];
    }

    /**
     * Returns Final Price.
     * The unit price of the default price point's last bracket, as a decimal string. `null` if there are
     * no brackets.
     */
    public function getFinalPrice(): ?string
    {
        if (count($this->finalPrice) == 0) {
            return null;
        }
        return $this->finalPrice['value'];
    }

    /**
     * Sets Final Price.
     * The unit price of the default price point's last bracket, as a decimal string. `null` if there are
     * no brackets.
     *
     * @maps final_price
     */
    public function setFinalPrice(?string $finalPrice): void
    {
        $this->finalPrice['value'] = $finalPrice;
    }

    /**
     * Unsets Final Price.
     * The unit price of the default price point's last bracket, as a decimal string. `null` if there are
     * no brackets.
     */
    public function unsetFinalPrice(): void
    {
        $this->finalPrice = [];
    }

    /**
     * Converts the WalletProductPricePointSummary object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProductPricePointSummary object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProductPricePointSummary',
            [
                'archivedCount' => $this->archivedCount,
                'pricingScheme' => $this->getPricingScheme(),
                'tierCount' => $this->tierCount,
                'entryPrice' => $this->getEntryPrice(),
                'finalPrice' => $this->getFinalPrice(),
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
        if (isset($this->archivedCount)) {
            $json['archived_count'] = $this->archivedCount;
        }
        if (!empty($this->pricingScheme)) {
            $json['pricing_scheme'] = $this->pricingScheme['value'];
        }
        if (isset($this->tierCount)) {
            $json['tier_count']     = $this->tierCount;
        }
        if (!empty($this->entryPrice)) {
            $json['entry_price']    = $this->entryPrice['value'];
        }
        if (!empty($this->finalPrice)) {
            $json['final_price']    = $this->finalPrice['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
