<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Used in place of `price_point_id` to define a custom price point unique to the subscription. You
 * still need to provide `component_id`.
 */
class SubscriptionGroupComponentCustomPrice implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $pricingScheme;

    /**
     * @var Price[]|null
     */
    private $prices;

    /**
     * @var ComponentCustomPrice[]|null
     */
    private $overagePricing;

    /**
     * Returns Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     */
    public function getPricingScheme(): ?string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     *
     * @maps pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setPricingScheme(?string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Prices.
     *
     * @return Price[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     *
     * @maps prices
     *
     * @param Price[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Returns Overage Pricing.
     *
     * @return ComponentCustomPrice[]|null
     */
    public function getOveragePricing(): ?array
    {
        return $this->overagePricing;
    }

    /**
     * Sets Overage Pricing.
     *
     * @maps overage_pricing
     *
     * @param ComponentCustomPrice[]|null $overagePricing
     */
    public function setOveragePricing(?array $overagePricing): void
    {
        $this->overagePricing = $overagePricing;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']  = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->prices)) {
            $json['prices']          = $this->prices;
        }
        if (isset($this->overagePricing)) {
            $json['overage_pricing'] = $this->overagePricing;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
