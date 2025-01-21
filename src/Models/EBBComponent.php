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

class EBBComponent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $unitName;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var string
     */
    private $pricingScheme;

    /**
     * @var Price[]|null
     */
    private $prices;

    /**
     * @var ComponentPricePointItem[]|null
     */
    private $pricePoints;

    /**
     * @var string|float|null
     */
    private $unitPrice;

    /**
     * @var string|null
     */
    private $taxCode;

    /**
     * @var bool|null
     */
    private $hideDateRangeOnInvoice;

    /**
     * @var int
     */
    private $eventBasedBillingMetricId;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var array
     */
    private $intervalUnit = [];

    /**
     * @param string $name
     * @param string $unitName
     * @param string $pricingScheme
     * @param int $eventBasedBillingMetricId
     */
    public function __construct(string $name, string $unitName, string $pricingScheme, int $eventBasedBillingMetricId)
    {
        $this->name = $name;
        $this->unitName = $unitName;
        $this->pricingScheme = $pricingScheme;
        $this->eventBasedBillingMetricId = $eventBasedBillingMetricId;
    }

    /**
     * Returns Name.
     * A name for this component that is suitable for showing customers and displaying on billing
     * statements, ie. "Minutes".
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * A name for this component that is suitable for showing customers and displaying on billing
     * statements, ie. "Minutes".
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Unit Name.
     * The name of the unit of measurement for the component. It should be singular since it will be
     * automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on
     * a subscription’s component line-item
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * Sets Unit Name.
     * The name of the unit of measurement for the component. It should be singular since it will be
     * automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on
     * a subscription’s component line-item
     *
     * @required
     * @maps unit_name
     */
    public function setUnitName(string $unitName): void
    {
        $this->unitName = $unitName;
    }

    /**
     * Returns Description.
     * A description for the component that will be displayed to the user on the hosted signup page.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * A description for the component that will be displayed to the user on the hosted signup page.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Handle.
     * A unique identifier for your use that can be used to retrieve this component is subsequent requests.
     * Must start with a letter or number and may only contain lowercase letters, numbers, or the
     * characters '.', ':', '-', or '_'.
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * A unique identifier for your use that can be used to retrieve this component is subsequent requests.
     * Must start with a letter or number and may only contain lowercase letters, numbers, or the
     * characters '.', ':', '-', or '_'.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Taxable.
     * Boolean flag describing whether a component is taxable or not.
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    /**
     * Sets Taxable.
     * Boolean flag describing whether a component is taxable or not.
     *
     * @maps taxable
     */
    public function setTaxable(?bool $taxable): void
    {
        $this->taxable = $taxable;
    }

    /**
     * Returns Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     */
    public function getPricingScheme(): string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     *
     * @required
     * @maps pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setPricingScheme(string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Prices.
     * (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket
     * Rules](https://maxio.zendesk.com/hc/en-us/articles/24261149166733-Component-Pricing-Schemes#price-
     * bracket-rules) for an overview of how price brackets work for different pricing schemes.
     *
     * @return Price[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     * (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket
     * Rules](https://maxio.zendesk.com/hc/en-us/articles/24261149166733-Component-Pricing-Schemes#price-
     * bracket-rules) for an overview of how price brackets work for different pricing schemes.
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
     * Returns Price Points.
     *
     * @return ComponentPricePointItem[]|null
     */
    public function getPricePoints(): ?array
    {
        return $this->pricePoints;
    }

    /**
     * Sets Price Points.
     *
     * @maps price_points
     *
     * @param ComponentPricePointItem[]|null $pricePoints
     */
    public function setPricePoints(?array $pricePoints): void
    {
        $this->pricePoints = $pricePoints;
    }

    /**
     * Returns Unit Price.
     * The amount the customer will be charged per unit when the pricing scheme is “per_unit”. The price
     * can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return string|float|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The amount the customer will be charged per unit when the pricing scheme is “per_unit”. The price
     * can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @maps unit_price
     * @mapsBy anyOf(oneOf(string,float),null)
     *
     * @param string|float|null $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * Sets Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode = $taxCode;
    }

    /**
     * Returns Hide Date Range on Invoice.
     * (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range
     * should show for the component on generated invoices.
     */
    public function getHideDateRangeOnInvoice(): ?bool
    {
        return $this->hideDateRangeOnInvoice;
    }

    /**
     * Sets Hide Date Range on Invoice.
     * (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range
     * should show for the component on generated invoices.
     *
     * @maps hide_date_range_on_invoice
     */
    public function setHideDateRangeOnInvoice(?bool $hideDateRangeOnInvoice): void
    {
        $this->hideDateRangeOnInvoice = $hideDateRangeOnInvoice;
    }

    /**
     * Returns Event Based Billing Metric Id.
     * The ID of an event based billing metric that will be attached to this component.
     */
    public function getEventBasedBillingMetricId(): int
    {
        return $this->eventBasedBillingMetricId;
    }

    /**
     * Sets Event Based Billing Metric Id.
     * The ID of an event based billing metric that will be attached to this component.
     *
     * @required
     * @maps event_based_billing_metric_id
     */
    public function setEventBasedBillingMetricId(int $eventBasedBillingMetricId): void
    {
        $this->eventBasedBillingMetricId = $eventBasedBillingMetricId;
    }

    /**
     * Returns Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component's default price point would renew every 30 days. This property is only available for
     * sites with Multifrequency enabled.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component's default price point would renew every 30 days. This property is only available for
     * sites with Multifrequency enabled.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this component's default price point, either month or
     * day. This property is only available for sites with Multifrequency enabled.
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
     * A string representing the interval unit for this component's default price point, either month or
     * day. This property is only available for sites with Multifrequency enabled.
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
     * A string representing the interval unit for this component's default price point, either month or
     * day. This property is only available for sites with Multifrequency enabled.
     */
    public function unsetIntervalUnit(): void
    {
        $this->intervalUnit = [];
    }

    /**
     * Converts the EBBComponent object to a human-readable string representation.
     *
     * @return string The string representation of the EBBComponent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'EBBComponent',
            [
                'name' => $this->name,
                'unitName' => $this->unitName,
                'description' => $this->description,
                'handle' => $this->handle,
                'taxable' => $this->taxable,
                'pricingScheme' => $this->pricingScheme,
                'prices' => $this->prices,
                'pricePoints' => $this->pricePoints,
                'unitPrice' => $this->unitPrice,
                'taxCode' => $this->taxCode,
                'hideDateRangeOnInvoice' => $this->hideDateRangeOnInvoice,
                'eventBasedBillingMetricId' => $this->eventBasedBillingMetricId,
                'interval' => $this->interval,
                'intervalUnit' => $this->getIntervalUnit(),
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
        $json['name']                           = $this->name;
        $json['unit_name']                      = $this->unitName;
        if (isset($this->description)) {
            $json['description']                = $this->description;
        }
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        if (isset($this->taxable)) {
            $json['taxable']                    = $this->taxable;
        }
        $json['pricing_scheme']                 = PricingScheme::checkValue($this->pricingScheme);
        if (isset($this->prices)) {
            $json['prices']                     = $this->prices;
        }
        if (isset($this->pricePoints)) {
            $json['price_points']               = $this->pricePoints;
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']                 =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->unitPrice,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->taxCode)) {
            $json['tax_code']                   = $this->taxCode;
        }
        if (isset($this->hideDateRangeOnInvoice)) {
            $json['hide_date_range_on_invoice'] = $this->hideDateRangeOnInvoice;
        }
        $json['event_based_billing_metric_id']  = $this->eventBasedBillingMetricId;
        if (isset($this->interval)) {
            $json['interval']                   = $this->interval;
        }
        if (!empty($this->intervalUnit)) {
            $json['interval_unit']              = IntervalUnit::checkValue($this->intervalUnit['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
