<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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
     * @var string|null
     */
    private $handle;

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var ComponentPricePointPrice[]|null
     */
    private $prices;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate = true;

    /**
     * @var int|null
     */
    private $subscriptionId;

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
     * Returns Archived At.
     */
    public function getArchivedAt(): ?string
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
     */
    public function setArchivedAt(?string $archivedAt): void
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
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Prices.
     *
     * @return ComponentPricePointPrice[]|null
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
     * @param ComponentPricePointPrice[]|null $prices
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
        return $this->interval;
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
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
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
        $this->intervalUnit = $intervalUnit;
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
            $json['id']                     = $this->id;
        }
        if (isset($this->type)) {
            $json['type']                   = PricePointType::checkValue($this->type);
        }
        if (isset($this->default)) {
            $json['default']                = $this->default;
        }
        if (isset($this->name)) {
            $json['name']                   = $this->name;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']         = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->componentId)) {
            $json['component_id']           = $this->componentId;
        }
        if (isset($this->handle)) {
            $json['handle']                 = $this->handle;
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']            = $this->archivedAt['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']             = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']             = $this->updatedAt;
        }
        if (isset($this->prices)) {
            $json['prices']                 = $this->prices;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate'] = $this->useSiteExchangeRate;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']        = $this->subscriptionId;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
