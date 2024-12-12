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

class CreateAllocation implements \JsonSerializable
{
    /**
     * @var float
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $prorationDowngradeScheme;

    /**
     * @var string|null
     */
    private $prorationUpgradeScheme;

    /**
     * @var bool|null
     */
    private $accrueCharge;

    /**
     * @var array
     */
    private $downgradeCredit = [];

    /**
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var bool|null
     */
    private $initiateDunning;

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * @var BillingSchedule|null
     */
    private $billingSchedule;

    /**
     * @param float $quantity
     */
    public function __construct(float $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Quantity.
     * The allocated quantity to which to set the line-items allocated quantity. By default, this is an
     * integer. If decimal allocations are enabled for the component, it will be a decimal number. For
     * On/Off components, use 1for on and 0 for off.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The allocated quantity to which to set the line-items allocated quantity. By default, this is an
     * integer. If decimal allocations are enabled for the component, it will be a decimal number. For
     * On/Off components, use 1for on and 0 for off.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Component Id.
     * (required for the multiple allocations endpoint) The id associated with the component for which the
     * allocation is being made
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * (required for the multiple allocations endpoint) The id associated with the component for which the
     * allocation is being made
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Memo.
     * A memo to record along with the allocation
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A memo to record along with the allocation
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Proration Downgrade Scheme.
     * The scheme used if the proration is a downgrade. Defaults to the site setting if one is not provided.
     */
    public function getProrationDowngradeScheme(): ?string
    {
        return $this->prorationDowngradeScheme;
    }

    /**
     * Sets Proration Downgrade Scheme.
     * The scheme used if the proration is a downgrade. Defaults to the site setting if one is not provided.
     *
     * @maps proration_downgrade_scheme
     */
    public function setProrationDowngradeScheme(?string $prorationDowngradeScheme): void
    {
        $this->prorationDowngradeScheme = $prorationDowngradeScheme;
    }

    /**
     * Returns Proration Upgrade Scheme.
     * The scheme used if the proration is an upgrade. Defaults to the site setting if one is not provided.
     */
    public function getProrationUpgradeScheme(): ?string
    {
        return $this->prorationUpgradeScheme;
    }

    /**
     * Sets Proration Upgrade Scheme.
     * The scheme used if the proration is an upgrade. Defaults to the site setting if one is not provided.
     *
     * @maps proration_upgrade_scheme
     */
    public function setProrationUpgradeScheme(?string $prorationUpgradeScheme): void
    {
        $this->prorationUpgradeScheme = $prorationUpgradeScheme;
    }

    /**
     * Returns Accrue Charge.
     * If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal
     * or if capture should be attempted immediately. Defaults to the site setting if one is not provided.
     */
    public function getAccrueCharge(): ?bool
    {
        return $this->accrueCharge;
    }

    /**
     * Sets Accrue Charge.
     * If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal
     * or if capture should be attempted immediately. Defaults to the site setting if one is not provided.
     *
     * @maps accrue_charge
     */
    public function setAccrueCharge(?bool $accrueCharge): void
    {
        $this->accrueCharge = $accrueCharge;
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
     * Returns Initiate Dunning.
     * If set to true, if the immediate component payment fails, initiate dunning for the subscription.
     * Otherwise, leave the charges on the subscription to pay for at renewal. Defaults to false.
     */
    public function getInitiateDunning(): ?bool
    {
        return $this->initiateDunning;
    }

    /**
     * Sets Initiate Dunning.
     * If set to true, if the immediate component payment fails, initiate dunning for the subscription.
     * Otherwise, leave the charges on the subscription to pay for at renewal. Defaults to false.
     *
     * @maps initiate_dunning
     */
    public function setInitiateDunning(?bool $initiateDunning): void
    {
        $this->initiateDunning = $initiateDunning;
    }

    /**
     * Returns Price Point Id.
     * Price point that the allocation should be charged at. Accepts either the price point's id (integer)
     * or handle (string). When not specified, the default price point will be used.
     *
     * @return string|int|null
     */
    public function getPricePointId()
    {
        if (count($this->pricePointId) == 0) {
            return null;
        }
        return $this->pricePointId['value'];
    }

    /**
     * Sets Price Point Id.
     * Price point that the allocation should be charged at. Accepts either the price point's id (integer)
     * or handle (string). When not specified, the default price point will be used.
     *
     * @maps price_point_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $pricePointId
     */
    public function setPricePointId($pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     * Price point that the allocation should be charged at. Accepts either the price point's id (integer)
     * or handle (string). When not specified, the default price point will be used.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
    }

    /**
     * Returns Billing Schedule.
     * This attribute is particularly useful when you need to align billing events for different components
     * on distinct schedules within a subscription. Please note this only works for site with
     * Multifrequency enabled
     */
    public function getBillingSchedule(): ?BillingSchedule
    {
        return $this->billingSchedule;
    }

    /**
     * Sets Billing Schedule.
     * This attribute is particularly useful when you need to align billing events for different components
     * on distinct schedules within a subscription. Please note this only works for site with
     * Multifrequency enabled
     *
     * @maps billing_schedule
     */
    public function setBillingSchedule(?BillingSchedule $billingSchedule): void
    {
        $this->billingSchedule = $billingSchedule;
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
        $json['quantity']                       = $this->quantity;
        if (isset($this->componentId)) {
            $json['component_id']               = $this->componentId;
        }
        if (isset($this->memo)) {
            $json['memo']                       = $this->memo;
        }
        if (isset($this->prorationDowngradeScheme)) {
            $json['proration_downgrade_scheme'] = $this->prorationDowngradeScheme;
        }
        if (isset($this->prorationUpgradeScheme)) {
            $json['proration_upgrade_scheme']   = $this->prorationUpgradeScheme;
        }
        if (isset($this->accrueCharge)) {
            $json['accrue_charge']              = $this->accrueCharge;
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit']           = CreditType::checkValue($this->downgradeCredit['value']);
        }
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']             = CreditType::checkValue($this->upgradeCharge['value']);
        }
        if (isset($this->initiateDunning)) {
            $json['initiate_dunning']           = $this->initiateDunning;
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePointId['value'],
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->billingSchedule)) {
            $json['billing_schedule']           = $this->billingSchedule;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
