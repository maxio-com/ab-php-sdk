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
 * A price point to create for the Wallet Product, in the same call that creates or updates it.
 */
class WalletProductPricePointAttributes implements \JsonSerializable
{
    /**
     * @var string
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
     * @var array
     */
    private $unitPrice = [];

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * @var Price1[]|null
     */
    private $prices;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns Name.
     * The price point's name. Required. Omitting it fails validation with a message that reads `Name:
     * cannot be blank.`, not naming the price point.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The price point's name. Required. Omitting it fails validation with a message that reads `Name:
     * cannot be blank.`, not naming the price point.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
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
     * Returns Unit Price.
     * Required when `pricing_scheme` is `per_unit`.
     */
    public function getUnitPrice(): ?string
    {
        if (count($this->unitPrice) == 0) {
            return null;
        }
        return $this->unitPrice['value'];
    }

    /**
     * Sets Unit Price.
     * Required when `pricing_scheme` is `per_unit`.
     *
     * @maps unit_price
     */
    public function setUnitPrice(?string $unitPrice): void
    {
        $this->unitPrice['value'] = $unitPrice;
    }

    /**
     * Unsets Unit Price.
     * Required when `pricing_scheme` is `per_unit`.
     */
    public function unsetUnitPrice(): void
    {
        $this->unitPrice = [];
    }

    /**
     * Returns Tax Included.
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
    }

    /**
     * Returns Interval.
     * Requires Multifrequency to be enabled on the site.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * Requires Multifrequency to be enabled on the site.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     *
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Use Site Exchange Rate.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    /**
     * Returns Prices.
     * Required for every `pricing_scheme` other than `per_unit`.
     *
     * @return Price1[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     * Required for every `pricing_scheme` other than `per_unit`.
     *
     * @maps prices
     *
     * @param Price1[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Converts the WalletProductPricePointAttributes object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProductPricePointAttributes object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProductPricePointAttributes',
            [
                'name' => $this->name,
                'handle' => $this->handle,
                'pricingScheme' => $this->pricingScheme,
                'unitPrice' => $this->getUnitPrice(),
                'taxIncluded' => $this->taxIncluded,
                'interval' => $this->interval,
                'intervalUnit' => $this->intervalUnit,
                'useSiteExchangeRate' => $this->useSiteExchangeRate,
                'prices' => $this->prices,
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
        $json['name']                       = $this->name;
        if (isset($this->handle)) {
            $json['handle']                 = $this->handle;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']         = PricingScheme::checkValue($this->pricingScheme);
        }
        if (!empty($this->unitPrice)) {
            $json['unit_price']             = $this->unitPrice['value'];
        }
        if (isset($this->taxIncluded)) {
            $json['tax_included']           = $this->taxIncluded;
        }
        if (isset($this->interval)) {
            $json['interval']               = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']          = IntervalUnit::checkValue($this->intervalUnit);
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate'] = $this->useSiteExchangeRate;
        }
        if (isset($this->prices)) {
            $json['prices']                 = $this->prices;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
