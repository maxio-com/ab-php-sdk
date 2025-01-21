<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class PreviewAllocationsRequest implements \JsonSerializable
{
    /**
     * @var CreateAllocation[]
     */
    private $allocations;

    /**
     * @var \DateTime|null
     */
    private $effectiveProrationDate;

    /**
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var array
     */
    private $downgradeCredit = [];

    /**
     * @param CreateAllocation[] $allocations
     */
    public function __construct(array $allocations)
    {
        $this->allocations = $allocations;
    }

    /**
     * Returns Allocations.
     *
     * @return CreateAllocation[]
     */
    public function getAllocations(): array
    {
        return $this->allocations;
    }

    /**
     * Sets Allocations.
     *
     * @required
     * @maps allocations
     *
     * @param CreateAllocation[] $allocations
     */
    public function setAllocations(array $allocations): void
    {
        $this->allocations = $allocations;
    }

    /**
     * Returns Effective Proration Date.
     * To calculate proration amounts for a future time. Only within a current subscription period. Only
     * ISO8601 format is supported.
     */
    public function getEffectiveProrationDate(): ?\DateTime
    {
        return $this->effectiveProrationDate;
    }

    /**
     * Sets Effective Proration Date.
     * To calculate proration amounts for a future time. Only within a current subscription period. Only
     * ISO8601 format is supported.
     *
     * @maps effective_proration_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setEffectiveProrationDate(?\DateTime $effectiveProrationDate): void
    {
        $this->effectiveProrationDate = $effectiveProrationDate;
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
     * Converts the PreviewAllocationsRequest object to a human-readable string representation.
     *
     * @return string The string representation of the PreviewAllocationsRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PreviewAllocationsRequest',
            [
                'allocations' => $this->allocations,
                'effectiveProrationDate' => $this->effectiveProrationDate,
                'upgradeCharge' => $this->getUpgradeCharge(),
                'downgradeCredit' => $this->getDowngradeCredit(),
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
        $json['allocations']                  = $this->allocations;
        if (isset($this->effectiveProrationDate)) {
            $json['effective_proration_date'] = DateTimeHelper::toSimpleDate($this->effectiveProrationDate);
        }
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']           = CreditType::checkValue($this->upgradeCharge['value']);
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit']         = CreditType::checkValue($this->downgradeCredit['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
