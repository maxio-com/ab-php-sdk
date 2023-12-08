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
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var array
     */
    private $downgradeCredit = [];

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
     * @var string|null
     */
    private $priceInCents;

    /**
     * @var int
     */
    private $eventBasedBillingMetricId;

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
     * Rules](https://help.chargify.com/products/product-components.html#general-price-bracket-rules) for
     * an overview of how price brackets work for different pricing schemes.
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
     * Rules](https://help.chargify.com/products/product-components.html#general-price-bracket-rules) for
     * an overview of how price brackets work for different pricing schemes.
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
     * Returns Upgrade Charge.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function getUpgradeCharge(): ?string
    {
        if (count($this->upgradeCharge) == 0) {
            return null;
        }
        return $this->upgradeCharge['value'];
    }

    /**
     * Sets Upgrade Charge.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     *
     * @maps upgrade_charge
     * @factory \AdvancedBillingLib\Models\CreditType::checkValue
     */
    public function setUpgradeCharge(?string $upgradeCharge): void
    {
        $this->upgradeCharge['value'] = $upgradeCharge;
    }

    /**
     * Unsets Upgrade Charge.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function unsetUpgradeCharge(): void
    {
        $this->upgradeCharge = [];
    }

    /**
     * Returns Downgrade Credit.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function getDowngradeCredit(): ?string
    {
        if (count($this->downgradeCredit) == 0) {
            return null;
        }
        return $this->downgradeCredit['value'];
    }

    /**
     * Sets Downgrade Credit.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     *
     * @maps downgrade_credit
     * @factory \AdvancedBillingLib\Models\CreditType::checkValue
     */
    public function setDowngradeCredit(?string $downgradeCredit): void
    {
        $this->downgradeCredit['value'] = $downgradeCredit;
    }

    /**
     * Unsets Downgrade Credit.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function unsetDowngradeCredit(): void
    {
        $this->downgradeCredit = [];
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
     * Returns Price in Cents.
     * deprecated May 2011 - use unit_price instead
     */
    public function getPriceInCents(): ?string
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * deprecated May 2011 - use unit_price instead
     *
     * @maps price_in_cents
     */
    public function setPriceInCents(?string $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
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
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']             = CreditType::checkValue($this->upgradeCharge['value']);
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit']           = CreditType::checkValue($this->downgradeCredit['value']);
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
        if (isset($this->priceInCents)) {
            $json['price_in_cents']             = $this->priceInCents;
        }
        $json['event_based_billing_metric_id']  = $this->eventBasedBillingMetricId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
