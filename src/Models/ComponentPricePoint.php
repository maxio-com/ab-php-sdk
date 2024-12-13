<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class ComponentPricePoint implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var bool|null
     */
    private $default;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $pricingScheme;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var array
     */
    private $handle = [];

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var ComponentPrice[]|null
     */
    private $prices;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var array
     */
    private $interval = [];

    /**
     * @var array
     */
    private $intervalUnit = [];

    /**
     * @var ComponentCurrencyPrice[]|null
     */
    private $currencyPrices;

    /**
     * @var ComponentPrice[]|null
     */
    private $overagePrices;

    /**
     * @var string|null
     */
    private $overagePricingScheme;

    /**
     * @var bool|null
     */
    private $renewPrepaidAllocation;

    /**
     * @var bool|null
     */
    private $rolloverPrepaidRemainder;

    /**
     * @var array
     */
    private $expirationInterval = [];

    /**
     * @var array
     */
    private $expirationIntervalUnit = [];

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Type.
     * Price point type. We expose the following types:
     * 1. **default**: a price point that is marked as a default price for a certain product.
     * 2. **custom**: a custom price point.
     * 3. **catalog**: a price point that is **not** marked as a default price for a certain product and is
     * **not** a custom one.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Price point type. We expose the following types:
     * 1. **default**: a price point that is marked as a default price for a certain product.
     * 2. **custom**: a custom price point.
     * 3. **catalog**: a price point that is **not** marked as a default price for a certain product and is
     * **not** a custom one.
     *
     * @maps type
     * @factory \AdvancedBillingLib\Models\PricePointType::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Default.
     * Note: Refer to type attribute instead
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }

    /**
     * Sets Default.
     * Note: Refer to type attribute instead
     *
     * @maps default
     */
    public function setDefault(?bool $default): void
    {
        $this->default = $default;
    }

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
     * Returns Component Id.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Handle.
     */
    public function getHandle(): ?string
    {
        if (count($this->handle) == 0) {
            return null;
        }
        return $this->handle['value'];
    }

    /**
     * Sets Handle.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle['value'] = $handle;
    }

    /**
     * Unsets Handle.
     */
    public function unsetHandle(): void
    {
        $this->handle = [];
    }

    /**
     * Returns Archived At.
     */
    public function getArchivedAt(): ?\DateTime
    {
        if (count($this->archivedAt) == 0) {
            return null;
        }
        return $this->archivedAt['value'];
    }

    /**
     * Sets Archived At.
     *
     * @maps archived_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setArchivedAt(?\DateTime $archivedAt): void
    {
        $this->archivedAt['value'] = $archivedAt;
    }

    /**
     * Unsets Archived At.
     */
    public function unsetArchivedAt(): void
    {
        $this->archivedAt = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Prices.
     *
     * @return ComponentPrice[]|null
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
     * @param ComponentPrice[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Returns Use Site Exchange Rate.
     * Whether to use the site level exchange rate or define your own prices for each currency if you have
     * multiple currencies defined on the site. Defaults to true during creation.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     * Whether to use the site level exchange rate or define your own prices for each currency if you have
     * multiple currencies defined on the site. Defaults to true during creation.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    /**
     * Returns Subscription Id.
     * (only used for Custom Pricing - ie. when the price point's type is `custom`) The id of the
     * subscription that the custom price point is for.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * (only used for Custom Pricing - ie. when the price point's type is `custom`) The id of the
     * subscription that the custom price point is for.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
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
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     */
    public function getInterval(): ?int
    {
        if (count($this->interval) == 0) {
            return null;
        }
        return $this->interval['value'];
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval['value'] = $interval;
    }

    /**
     * Unsets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     */
    public function unsetInterval(): void
    {
        $this->interval = [];
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
     * Returns Currency Prices.
     * An array of currency pricing data is available when multiple currencies are defined for the site. It
     * varies based on the use_site_exchange_rate setting for the price point. This parameter is present
     * only in the response of read endpoints, after including the appropriate query parameter.
     *
     * @return ComponentCurrencyPrice[]|null
     */
    public function getCurrencyPrices(): ?array
    {
        return $this->currencyPrices;
    }

    /**
     * Sets Currency Prices.
     * An array of currency pricing data is available when multiple currencies are defined for the site. It
     * varies based on the use_site_exchange_rate setting for the price point. This parameter is present
     * only in the response of read endpoints, after including the appropriate query parameter.
     *
     * @maps currency_prices
     *
     * @param ComponentCurrencyPrice[]|null $currencyPrices
     */
    public function setCurrencyPrices(?array $currencyPrices): void
    {
        $this->currencyPrices = $currencyPrices;
    }

    /**
     * Returns Overage Prices.
     * Applicable only to prepaid usage components. An array of overage price brackets.
     *
     * @return ComponentPrice[]|null
     */
    public function getOveragePrices(): ?array
    {
        return $this->overagePrices;
    }

    /**
     * Sets Overage Prices.
     * Applicable only to prepaid usage components. An array of overage price brackets.
     *
     * @maps overage_prices
     *
     * @param ComponentPrice[]|null $overagePrices
     */
    public function setOveragePrices(?array $overagePrices): void
    {
        $this->overagePrices = $overagePrices;
    }

    /**
     * Returns Overage Pricing Scheme.
     * Applicable only to prepaid usage components. Pricing scheme for overage pricing.
     */
    public function getOveragePricingScheme(): ?string
    {
        return $this->overagePricingScheme;
    }

    /**
     * Sets Overage Pricing Scheme.
     * Applicable only to prepaid usage components. Pricing scheme for overage pricing.
     *
     * @maps overage_pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setOveragePricingScheme(?string $overagePricingScheme): void
    {
        $this->overagePricingScheme = $overagePricingScheme;
    }

    /**
     * Returns Renew Prepaid Allocation.
     * Applicable only to prepaid usage components. Boolean which controls whether or not the allocated
     * quantity should be renewed at the beginning of each period.
     */
    public function getRenewPrepaidAllocation(): ?bool
    {
        return $this->renewPrepaidAllocation;
    }

    /**
     * Sets Renew Prepaid Allocation.
     * Applicable only to prepaid usage components. Boolean which controls whether or not the allocated
     * quantity should be renewed at the beginning of each period.
     *
     * @maps renew_prepaid_allocation
     */
    public function setRenewPrepaidAllocation(?bool $renewPrepaidAllocation): void
    {
        $this->renewPrepaidAllocation = $renewPrepaidAllocation;
    }

    /**
     * Returns Rollover Prepaid Remainder.
     * Applicable only to prepaid usage components. Boolean which controls whether or not remaining units
     * should be rolled over to the next period.
     */
    public function getRolloverPrepaidRemainder(): ?bool
    {
        return $this->rolloverPrepaidRemainder;
    }

    /**
     * Sets Rollover Prepaid Remainder.
     * Applicable only to prepaid usage components. Boolean which controls whether or not remaining units
     * should be rolled over to the next period.
     *
     * @maps rollover_prepaid_remainder
     */
    public function setRolloverPrepaidRemainder(?bool $rolloverPrepaidRemainder): void
    {
        $this->rolloverPrepaidRemainder = $rolloverPrepaidRemainder;
    }

    /**
     * Returns Expiration Interval.
     * Applicable only to prepaid usage components where rollover_prepaid_remainder is true. The number of
     * `expiration_interval_unit`s after which rollover amounts should expire.
     */
    public function getExpirationInterval(): ?int
    {
        if (count($this->expirationInterval) == 0) {
            return null;
        }
        return $this->expirationInterval['value'];
    }

    /**
     * Sets Expiration Interval.
     * Applicable only to prepaid usage components where rollover_prepaid_remainder is true. The number of
     * `expiration_interval_unit`s after which rollover amounts should expire.
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval['value'] = $expirationInterval;
    }

    /**
     * Unsets Expiration Interval.
     * Applicable only to prepaid usage components where rollover_prepaid_remainder is true. The number of
     * `expiration_interval_unit`s after which rollover amounts should expire.
     */
    public function unsetExpirationInterval(): void
    {
        $this->expirationInterval = [];
    }

    /**
     * Returns Expiration Interval Unit.
     * Applicable only to prepaid usage components where rollover_prepaid_remainder is true. A string
     * representing the expiration interval unit for this component, either month or day.
     */
    public function getExpirationIntervalUnit(): ?string
    {
        if (count($this->expirationIntervalUnit) == 0) {
            return null;
        }
        return $this->expirationIntervalUnit['value'];
    }

    /**
     * Sets Expiration Interval Unit.
     * Applicable only to prepaid usage components where rollover_prepaid_remainder is true. A string
     * representing the expiration interval unit for this component, either month or day.
     *
     * @maps expiration_interval_unit
     * @factory \AdvancedBillingLib\Models\ExpirationIntervalUnit::checkValue
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit['value'] = $expirationIntervalUnit;
    }

    /**
     * Unsets Expiration Interval Unit.
     * Applicable only to prepaid usage components where rollover_prepaid_remainder is true. A string
     * representing the expiration interval unit for this component, either month or day.
     */
    public function unsetExpirationIntervalUnit(): void
    {
        $this->expirationIntervalUnit = [];
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
        if (isset($this->id)) {
            $json['id']                         = $this->id;
        }
        if (isset($this->type)) {
            $json['type']                       = PricePointType::checkValue($this->type);
        }
        if (isset($this->default)) {
            $json['default']                    = $this->default;
        }
        if (isset($this->name)) {
            $json['name']                       = $this->name;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']             = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->componentId)) {
            $json['component_id']               = $this->componentId;
        }
        if (!empty($this->handle)) {
            $json['handle']                     = $this->handle['value'];
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']                = DateTimeHelper::toRfc3339DateTime($this->archivedAt['value']);
        }
        if (isset($this->createdAt)) {
            $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                 = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->prices)) {
            $json['prices']                     = $this->prices;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']     = $this->useSiteExchangeRate;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']            = $this->subscriptionId;
        }
        if (isset($this->taxIncluded)) {
            $json['tax_included']               = $this->taxIncluded;
        }
        if (!empty($this->interval)) {
            $json['interval']                   = $this->interval['value'];
        }
        if (!empty($this->intervalUnit)) {
            $json['interval_unit']              = IntervalUnit::checkValue($this->intervalUnit['value']);
        }
        if (isset($this->currencyPrices)) {
            $json['currency_prices']            = $this->currencyPrices;
        }
        if (isset($this->overagePrices)) {
            $json['overage_prices']             = $this->overagePrices;
        }
        if (isset($this->overagePricingScheme)) {
            $json['overage_pricing_scheme']     = PricingScheme::checkValue($this->overagePricingScheme);
        }
        if (isset($this->renewPrepaidAllocation)) {
            $json['renew_prepaid_allocation']   = $this->renewPrepaidAllocation;
        }
        if (isset($this->rolloverPrepaidRemainder)) {
            $json['rollover_prepaid_remainder'] = $this->rolloverPrepaidRemainder;
        }
        if (!empty($this->expirationInterval)) {
            $json['expiration_interval']        = $this->expirationInterval['value'];
        }
        if (!empty($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   =
                ExpirationIntervalUnit::checkValue(
                    $this->expirationIntervalUnit['value']
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
