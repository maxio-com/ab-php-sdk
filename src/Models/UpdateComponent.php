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

class UpdateComponent implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $accountingCode = [];

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var array
     */
    private $taxCode = [];

    /**
     * @var array
     */
    private $itemCategory = [];

    /**
     * @var bool|null
     */
    private $displayOnHostedPage;

    /**
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var int|null
     */
    private $eventBasedBillingMetricId;

    /**
     * @var int|null
     */
    private $meteringMeterId;

    /**
     * @var string|null
     */
    private $meteringFormula;

    /**
     * @var array
     */
    private $unspscCode = [];

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
     * Returns Name.
     * The name of the Component, suitable for display on statements. e.g., Text Messages.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the Component, suitable for display on statements. e.g., Text Messages.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Description.
     * The description of the component.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * The description of the component.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * The description of the component.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Accounting Code.
     */
    public function getAccountingCode(): ?string
    {
        if (count($this->accountingCode) == 0) {
            return null;
        }
        return $this->accountingCode['value'];
    }

    /**
     * Sets Accounting Code.
     *
     * @maps accounting_code
     */
    public function setAccountingCode(?string $accountingCode): void
    {
        $this->accountingCode['value'] = $accountingCode;
    }

    /**
     * Unsets Accounting Code.
     */
    public function unsetAccountingCode(): void
    {
        $this->accountingCode = [];
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
     * Returns Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using AvaTax to tax based on locale. This attribute has a max length of 25 characters.
     */
    public function getTaxCode(): ?string
    {
        if (count($this->taxCode) == 0) {
            return null;
        }
        return $this->taxCode['value'];
    }

    /**
     * Sets Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using AvaTax to tax based on locale. This attribute has a max length of 25 characters.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode['value'] = $taxCode;
    }

    /**
     * Unsets Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using AvaTax to tax based on locale. This attribute has a max length of 25 characters.
     */
    public function unsetTaxCode(): void
    {
        $this->taxCode = [];
    }

    /**
     * Returns Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     */
    public function getItemCategory(): ?string
    {
        if (count($this->itemCategory) == 0) {
            return null;
        }
        return $this->itemCategory['value'];
    }

    /**
     * Sets Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     *
     * @maps item_category
     * @factory \AdvancedBillingLib\Models\ItemCategory::checkValue
     */
    public function setItemCategory(?string $itemCategory): void
    {
        $this->itemCategory['value'] = $itemCategory;
    }

    /**
     * Unsets Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     */
    public function unsetItemCategory(): void
    {
        $this->itemCategory = [];
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
     * Returns Upgrade Charge.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
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
     */
    public function unsetUpgradeCharge(): void
    {
        $this->upgradeCharge = [];
    }

    /**
     * Returns Event Based Billing Metric Id.
     * For components using legacy Events Based Billing, changes the attached site-owned metric. An
     * unchanged metric ID does not change the source. Sites using Maxio Metering ignore this input. This
     * ID does not identify a Maxio Metering meter.
     */
    public function getEventBasedBillingMetricId(): ?int
    {
        return $this->eventBasedBillingMetricId;
    }

    /**
     * Sets Event Based Billing Metric Id.
     * For components using legacy Events Based Billing, changes the attached site-owned metric. An
     * unchanged metric ID does not change the source. Sites using Maxio Metering ignore this input. This
     * ID does not identify a Maxio Metering meter.
     *
     * @maps event_based_billing_metric_id
     */
    public function setEventBasedBillingMetricId(?int $eventBasedBillingMetricId): void
    {
        $this->eventBasedBillingMetricId = $eventBasedBillingMetricId;
    }

    /**
     * Returns Metering Meter Id.
     * For components using Maxio Metering, changes the attached merchant-owned meter. Do not supply
     * together with a non-blank metering_formula. Ignored for components using legacy Events Based Billing;
     * not applicable to other component kinds.
     */
    public function getMeteringMeterId(): ?int
    {
        return $this->meteringMeterId;
    }

    /**
     * Sets Metering Meter Id.
     * For components using Maxio Metering, changes the attached merchant-owned meter. Do not supply
     * together with a non-blank metering_formula. Ignored for components using legacy Events Based Billing;
     * not applicable to other component kinds.
     *
     * @maps metering_meter_id
     */
    public function setMeteringMeterId(?int $meteringMeterId): void
    {
        $this->meteringMeterId = $meteringMeterId;
    }

    /**
     * Returns Metering Formula.
     * For components using Maxio Metering, sets an Advanced Formula using meters available to the site.
     * Supply a non-blank formula; do not supply together with metering_meter_id. Ignored for components
     * using legacy Events Based Billing; not applicable to other component kinds.
     */
    public function getMeteringFormula(): ?string
    {
        return $this->meteringFormula;
    }

    /**
     * Sets Metering Formula.
     * For components using Maxio Metering, sets an Advanced Formula using meters available to the site.
     * Supply a non-blank formula; do not supply together with metering_meter_id. Ignored for components
     * using legacy Events Based Billing; not applicable to other component kinds.
     *
     * @maps metering_formula
     */
    public function setMeteringFormula(?string $meteringFormula): void
    {
        $this->meteringFormula = $meteringFormula;
    }

    /**
     * Returns Unspsc Code.
     * (Optional) Custom UNSPSC commodity code for Level 3/CEDP payment data. When set, this value is sent
     * as the commodity code on invoice line items for this component instead of the default derived from
     * item_category.
     */
    public function getUnspscCode(): ?string
    {
        if (count($this->unspscCode) == 0) {
            return null;
        }
        return $this->unspscCode['value'];
    }

    /**
     * Sets Unspsc Code.
     * (Optional) Custom UNSPSC commodity code for Level 3/CEDP payment data. When set, this value is sent
     * as the commodity code on invoice line items for this component instead of the default derived from
     * item_category.
     *
     * @maps unspsc_code
     */
    public function setUnspscCode(?string $unspscCode): void
    {
        $this->unspscCode['value'] = $unspscCode;
    }

    /**
     * Unsets Unspsc Code.
     * (Optional) Custom UNSPSC commodity code for Level 3/CEDP payment data. When set, this value is sent
     * as the commodity code on invoice line items for this component instead of the default derived from
     * item_category.
     */
    public function unsetUnspscCode(): void
    {
        $this->unspscCode = [];
    }

    /**
     * Converts the UpdateComponent object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateComponent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateComponent',
            [
                'handle' => $this->handle,
                'name' => $this->name,
                'description' => $this->getDescription(),
                'accountingCode' => $this->getAccountingCode(),
                'taxable' => $this->taxable,
                'taxCode' => $this->getTaxCode(),
                'itemCategory' => $this->getItemCategory(),
                'displayOnHostedPage' => $this->displayOnHostedPage,
                'upgradeCharge' => $this->getUpgradeCharge(),
                'eventBasedBillingMetricId' => $this->eventBasedBillingMetricId,
                'meteringMeterId' => $this->meteringMeterId,
                'meteringFormula' => $this->meteringFormula,
                'unspscCode' => $this->getUnspscCode(),
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
        if (isset($this->handle)) {
            $json['handle']                        = $this->handle;
        }
        if (isset($this->name)) {
            $json['name']                          = $this->name;
        }
        if (!empty($this->description)) {
            $json['description']                   = $this->description['value'];
        }
        if (!empty($this->accountingCode)) {
            $json['accounting_code']               = $this->accountingCode['value'];
        }
        if (isset($this->taxable)) {
            $json['taxable']                       = $this->taxable;
        }
        if (!empty($this->taxCode)) {
            $json['tax_code']                      = $this->taxCode['value'];
        }
        if (!empty($this->itemCategory)) {
            $json['item_category']                 = ItemCategory::checkValue($this->itemCategory['value']);
        }
        if (isset($this->displayOnHostedPage)) {
            $json['display_on_hosted_page']        = $this->displayOnHostedPage;
        }
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']                = CreditType::checkValue($this->upgradeCharge['value']);
        }
        if (isset($this->eventBasedBillingMetricId)) {
            $json['event_based_billing_metric_id'] = $this->eventBasedBillingMetricId;
        }
        if (isset($this->meteringMeterId)) {
            $json['metering_meter_id']             = $this->meteringMeterId;
        }
        if (isset($this->meteringFormula)) {
            $json['metering_formula']              = $this->meteringFormula;
        }
        if (!empty($this->unspscCode)) {
            $json['unspsc_code']                   = $this->unspscCode['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
