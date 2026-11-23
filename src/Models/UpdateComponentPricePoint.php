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

class UpdateComponentPricePoint implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var string|null
     */
    private $pricingScheme;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var array
     */
    private $intervalUnit = [];

    /**
     * @var UpdatePrice[]|null
     */
    private $prices;

    /**
     * @var UpdateSecondaryPricing|null
     */
    private $secondaryPricing;

    /**
     * @var string|null
     */
    private $secondaryPricingScheme;

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

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
     * Returns Use Site Exchange Rate.
     * Whether to use the site level exchange rate or define your own prices for each currency if you have
     * multiple currencies defined on the site.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     * Whether to use the site level exchange rate or define your own prices for each currency if you have
     * multiple currencies defined on the site.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    /**
     * Returns Tax Included.
     * Whether or not the price point includes tax
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     * Whether or not the price point includes tax
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
    }

    /**
     * Returns Interval.
     * The numerical interval. e.g., an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. e.g., an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     */
    public function getIntervalUnit(): ?string
    {
        if (count($this->intervalUnit) == 0) {
            return null;
        }
        return $this->intervalUnit['value'];
    }

    /**
     * Sets Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     *
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit['value'] = $intervalUnit;
    }

    /**
     * Unsets Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     */
    public function unsetIntervalUnit(): void
    {
        $this->intervalUnit = [];
    }

    /**
     * Returns Prices.
     *
     * @return UpdatePrice[]|null
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
     * @param UpdatePrice[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Returns Secondary Pricing.
     * Hybrid Pricing only. Changes the secondary pricing model of an existing hybrid price point. Send
     * `pricing_scheme` (or the top-level `secondary_pricing_scheme`) every time you send this block; a
     * block without a scheme returns `422`. Brackets sent without an `id` are added to the existing ones
     * rather than replacing them, so to change a bracket set, update existing brackets by `id` and remove
     * the ones you no longer want with `_destroy: true`. See [Hybrid Pricing](page:introduction/basic-
     * concepts/hybrid-pricing).
     */
    public function getSecondaryPricing(): ?UpdateSecondaryPricing
    {
        return $this->secondaryPricing;
    }

    /**
     * Sets Secondary Pricing.
     * Hybrid Pricing only. Changes the secondary pricing model of an existing hybrid price point. Send
     * `pricing_scheme` (or the top-level `secondary_pricing_scheme`) every time you send this block; a
     * block without a scheme returns `422`. Brackets sent without an `id` are added to the existing ones
     * rather than replacing them, so to change a bracket set, update existing brackets by `id` and remove
     * the ones you no longer want with `_destroy: true`. See [Hybrid Pricing](page:introduction/basic-
     * concepts/hybrid-pricing).
     *
     * @maps secondary_pricing
     */
    public function setSecondaryPricing(?UpdateSecondaryPricing $secondaryPricing): void
    {
        $this->secondaryPricing = $secondaryPricing;
    }

    /**
     * Returns Secondary Pricing Scheme.
     * Hybrid Pricing only. Alternative to `secondary_pricing.pricing_scheme`; when both are sent,
     * `secondary_pricing.pricing_scheme` is used.
     */
    public function getSecondaryPricingScheme(): ?string
    {
        return $this->secondaryPricingScheme;
    }

    /**
     * Sets Secondary Pricing Scheme.
     * Hybrid Pricing only. Alternative to `secondary_pricing.pricing_scheme`; when both are sent,
     * `secondary_pricing.pricing_scheme` is used.
     *
     * @maps secondary_pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setSecondaryPricingScheme(?string $secondaryPricingScheme): void
    {
        $this->secondaryPricingScheme = $secondaryPricingScheme;
    }

    /**
     * Converts the UpdateComponentPricePoint object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateComponentPricePoint object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateComponentPricePoint',
            [
                'name' => $this->name,
                'handle' => $this->handle,
                'pricingScheme' => $this->pricingScheme,
                'useSiteExchangeRate' => $this->useSiteExchangeRate,
                'taxIncluded' => $this->taxIncluded,
                'interval' => $this->interval,
                'intervalUnit' => $this->getIntervalUnit(),
                'prices' => $this->prices,
                'secondaryPricing' => $this->secondaryPricing,
                'secondaryPricingScheme' => $this->secondaryPricingScheme,
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
        if (isset($this->name)) {
            $json['name']                     = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                   = $this->handle;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']           = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']   = $this->useSiteExchangeRate;
        }
        if (isset($this->taxIncluded)) {
            $json['tax_included']             = $this->taxIncluded;
        }
        if (isset($this->interval)) {
            $json['interval']                 = $this->interval;
        }
        if (!empty($this->intervalUnit)) {
            $json['interval_unit']            = IntervalUnit::checkValue($this->intervalUnit['value']);
        }
        if (isset($this->prices)) {
            $json['prices']                   = $this->prices;
        }
        if (isset($this->secondaryPricing)) {
            $json['secondary_pricing']        = $this->secondaryPricing;
        }
        if (isset($this->secondaryPricingScheme)) {
            $json['secondary_pricing_scheme'] = PricingScheme::checkValue($this->secondaryPricingScheme);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
