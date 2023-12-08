<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PricePoint implements \JsonSerializable
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
     * @var Price[]|null
     */
    private $prices;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate = true;

    /**
     * @var OveragePricing|null
     */
    private $overagePricing;

    /**
     * @var bool|null
     */
    private $rolloverPrepaidRemainder;

    /**
     * @var bool|null
     */
    private $renewPrepaidAllocation;

    /**
     * @var float|null
     */
    private $expirationInterval;

    /**
     * @var string|null
     */
    private $expirationIntervalUnit;

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
     * Returns Overage Pricing.
     */
    public function getOveragePricing(): ?OveragePricing
    {
        return $this->overagePricing;
    }

    /**
     * Sets Overage Pricing.
     *
     * @maps overage_pricing
     */
    public function setOveragePricing(?OveragePricing $overagePricing): void
    {
        $this->overagePricing = $overagePricing;
    }

    /**
     * Returns Rollover Prepaid Remainder.
     * Boolean which controls whether or not remaining units should be rolled over to the next period
     */
    public function getRolloverPrepaidRemainder(): ?bool
    {
        return $this->rolloverPrepaidRemainder;
    }

    /**
     * Sets Rollover Prepaid Remainder.
     * Boolean which controls whether or not remaining units should be rolled over to the next period
     *
     * @maps rollover_prepaid_remainder
     */
    public function setRolloverPrepaidRemainder(?bool $rolloverPrepaidRemainder): void
    {
        $this->rolloverPrepaidRemainder = $rolloverPrepaidRemainder;
    }

    /**
     * Returns Renew Prepaid Allocation.
     * Boolean which controls whether or not the allocated quantity should be renewed at the beginning of
     * each period
     */
    public function getRenewPrepaidAllocation(): ?bool
    {
        return $this->renewPrepaidAllocation;
    }

    /**
     * Sets Renew Prepaid Allocation.
     * Boolean which controls whether or not the allocated quantity should be renewed at the beginning of
     * each period
     *
     * @maps renew_prepaid_allocation
     */
    public function setRenewPrepaidAllocation(?bool $renewPrepaidAllocation): void
    {
        $this->renewPrepaidAllocation = $renewPrepaidAllocation;
    }

    /**
     * Returns Expiration Interval.
     * (only for prepaid usage components where rollover_prepaid_remainder is true) The number of
     * `expiration_interval_unit`s after which rollover amounts should expire
     */
    public function getExpirationInterval(): ?float
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     * (only for prepaid usage components where rollover_prepaid_remainder is true) The number of
     * `expiration_interval_unit`s after which rollover amounts should expire
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?float $expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     */
    public function getExpirationIntervalUnit(): ?string
    {
        return $this->expirationIntervalUnit;
    }

    /**
     * Sets Expiration Interval Unit.
     *
     * @maps expiration_interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit = $expirationIntervalUnit;
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
            $json['name']                       = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']             = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->prices)) {
            $json['prices']                     = $this->prices;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']     = $this->useSiteExchangeRate;
        }
        if (isset($this->overagePricing)) {
            $json['overage_pricing']            = $this->overagePricing;
        }
        if (isset($this->rolloverPrepaidRemainder)) {
            $json['rollover_prepaid_remainder'] = $this->rolloverPrepaidRemainder;
        }
        if (isset($this->renewPrepaidAllocation)) {
            $json['renew_prepaid_allocation']   = $this->renewPrepaidAllocation;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']        = $this->expirationInterval;
        }
        if (isset($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   = IntervalUnit::checkValue($this->expirationIntervalUnit);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
