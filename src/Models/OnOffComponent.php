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

class OnOffComponent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

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
     * @var string|float
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
     * @var int|null
     */
    private $interval;

    /**
     * @var array
     */
    private $intervalUnit = [];

    /**
     * @param string $name
     * @param string|float $unitPrice
     */
    public function __construct(string $name, $unitPrice)
    {
        $this->name = $name;
        $this->unitPrice = $unitPrice;
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
     * This is the amount that the customer will be charged when they turn the component on for the
     * subscription. The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return string|float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * This is the amount that the customer will be charged when they turn the component on for the
     * subscription. The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @required
     * @maps unit_price
     * @mapsBy oneOf(string,float)
     *
     * @param string|float $unitPrice
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
        $json['name']                            = $this->name;
        if (isset($this->description)) {
            $json['description']                 = $this->description;
        }
        if (isset($this->handle)) {
            $json['handle']                      = $this->handle;
        }
        if (isset($this->taxable)) {
            $json['taxable']                     = $this->taxable;
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
        $json['unit_price']                      =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->unitPrice,
                'oneOf(string,float)'
            );
        if (isset($this->taxCode)) {
            $json['tax_code']                    = $this->taxCode;
        }
        if (isset($this->hideDateRangeOnInvoice)) {
            $json['hide_date_range_on_invoice']  = $this->hideDateRangeOnInvoice;
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
        if (isset($this->interval)) {
            $json['interval']                    = $this->interval;
        }
        if (!empty($this->intervalUnit)) {
            $json['interval_unit']               = IntervalUnit::checkValue($this->intervalUnit['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
