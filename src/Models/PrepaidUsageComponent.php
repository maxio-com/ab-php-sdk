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

class PrepaidUsageComponent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
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
     * @var string|null
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
     * @var PrepaidComponentPricePoint[]|null
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
     * @var bool|null
     */
    private $displayOnHostedPage;

    /**
     * @var bool|null
     */
    private $allowFractionalQuantities;

    /**
     * @var int[]|null
     */
    private $publicSignupPageIds;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * Sets Unit Name.
     * The name of the unit of measurement for the component. It should be singular since it will be
     * automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on
     * a subscription’s component line-item
     *
     * @maps unit_name
     */
    public function setUnitName(?string $unitName): void
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
     * (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket
     * Rules](https://chargify.zendesk.com/hc/en-us/articles/4407755865883#general-price-bracket-rules) for
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
     * Rules](https://chargify.zendesk.com/hc/en-us/articles/4407755865883#general-price-bracket-rules) for
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
     * @return PrepaidComponentPricePoint[]|null
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
     * @param PrepaidComponentPricePoint[]|null $pricePoints
     */
    public function setPricePoints(?array $pricePoints): void
    {
        $this->pricePoints = $pricePoints;
    }

    /**
     * Returns Unit Price.
     * The amount the customer will be charged per unit when the pricing scheme is “per_unit”. For On/Off
     * Components, this is the amount that the customer will be charged when they turn the component on for
     * the subscription. The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return string|float|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The amount the customer will be charged per unit when the pricing scheme is “per_unit”. For On/Off
     * Components, this is the amount that the customer will be charged when they turn the component on for
     * the subscription. The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
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
     * Returns Display on Hosted Page.
     */
    public function getDisplayOnHostedPage(): ?bool
    {
        return $this->displayOnHostedPage;
    }

    /**
     * Sets Display on Hosted Page.
     *
     * @maps display_on_hosted_page
     */
    public function setDisplayOnHostedPage(?bool $displayOnHostedPage): void
    {
        $this->displayOnHostedPage = $displayOnHostedPage;
    }

    /**
     * Returns Allow Fractional Quantities.
     */
    public function getAllowFractionalQuantities(): ?bool
    {
        return $this->allowFractionalQuantities;
    }

    /**
     * Sets Allow Fractional Quantities.
     *
     * @maps allow_fractional_quantities
     */
    public function setAllowFractionalQuantities(?bool $allowFractionalQuantities): void
    {
        $this->allowFractionalQuantities = $allowFractionalQuantities;
    }

    /**
     * Returns Public Signup Page Ids.
     *
     * @return int[]|null
     */
    public function getPublicSignupPageIds(): ?array
    {
        return $this->publicSignupPageIds;
    }

    /**
     * Sets Public Signup Page Ids.
     *
     * @maps public_signup_page_ids
     *
     * @param int[]|null $publicSignupPageIds
     */
    public function setPublicSignupPageIds(?array $publicSignupPageIds): void
    {
        $this->publicSignupPageIds = $publicSignupPageIds;
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
        $json['name']                            = $this->name;
        if (isset($this->unitName)) {
            $json['unit_name']                   = $this->unitName;
        }
        if (isset($this->description)) {
            $json['description']                 = $this->description;
        }
        if (isset($this->handle)) {
            $json['handle']                      = $this->handle;
        }
        if (isset($this->taxable)) {
            $json['taxable']                     = $this->taxable;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']              = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->prices)) {
            $json['prices']                      = $this->prices;
        }
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']              = CreditType::checkValue($this->upgradeCharge['value']);
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit']            = CreditType::checkValue($this->downgradeCredit['value']);
        }
        if (isset($this->pricePoints)) {
            $json['price_points']                = $this->pricePoints;
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']                  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->unitPrice,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->taxCode)) {
            $json['tax_code']                    = $this->taxCode;
        }
        if (isset($this->hideDateRangeOnInvoice)) {
            $json['hide_date_range_on_invoice']  = $this->hideDateRangeOnInvoice;
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents']              = $this->priceInCents;
        }
        if (isset($this->overagePricing)) {
            $json['overage_pricing']             = $this->overagePricing;
        }
        if (isset($this->rolloverPrepaidRemainder)) {
            $json['rollover_prepaid_remainder']  = $this->rolloverPrepaidRemainder;
        }
        if (isset($this->renewPrepaidAllocation)) {
            $json['renew_prepaid_allocation']    = $this->renewPrepaidAllocation;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']         = $this->expirationInterval;
        }
        if (isset($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']    = IntervalUnit::checkValue($this->expirationIntervalUnit);
        }
        if (isset($this->displayOnHostedPage)) {
            $json['display_on_hosted_page']      = $this->displayOnHostedPage;
        }
        if (isset($this->allowFractionalQuantities)) {
            $json['allow_fractional_quantities'] = $this->allowFractionalQuantities;
        }
        if (isset($this->publicSignupPageIds)) {
            $json['public_signup_page_ids']      = $this->publicSignupPageIds;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
