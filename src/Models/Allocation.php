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

class Allocation implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $allocationId;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var array
     */
    private $componentHandle = [];

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|string|null
     */
    private $quantity;

    /**
     * @var int|string|null
     */
    private $previousQuantity;

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @var \DateTime|null
     */
    private $timestamp;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $prorationUpgradeScheme;

    /**
     * @var string|null
     */
    private $prorationDowngradeScheme;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var string|null
     */
    private $pricePointName;

    /**
     * @var string|null
     */
    private $pricePointHandle;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var int|null
     */
    private $previousPricePointId;

    /**
     * @var bool|null
     */
    private $accrueCharge;

    /**
     * @var bool|null
     */
    private $initiateDunning;

    /**
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var array
     */
    private $downgradeCredit = [];

    /**
     * @var array
     */
    private $payment = [];

    /**
     * @var \DateTime|null
     */
    private $expiresAt;

    /**
     * @var int|null
     */
    private $usedQuantity;

    /**
     * @var int|null
     */
    private $chargeId;

    /**
     * Returns Allocation Id.
     * The allocation unique id
     */
    public function getAllocationId(): ?int
    {
        return $this->allocationId;
    }

    /**
     * Sets Allocation Id.
     * The allocation unique id
     *
     * @maps allocation_id
     */
    public function setAllocationId(?int $allocationId): void
    {
        $this->allocationId = $allocationId;
    }

    /**
     * Returns Component Id.
     * The integer component ID for the allocation. This references a component that you have created in
     * your Product setup
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * The integer component ID for the allocation. This references a component that you have created in
     * your Product setup
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Component Handle.
     * The handle of the component. This references a component that you have created in your Product
     * setup
     */
    public function getComponentHandle(): ?string
    {
        if (count($this->componentHandle) == 0) {
            return null;
        }
        return $this->componentHandle['value'];
    }

    /**
     * Sets Component Handle.
     * The handle of the component. This references a component that you have created in your Product
     * setup
     *
     * @maps component_handle
     */
    public function setComponentHandle(?string $componentHandle): void
    {
        $this->componentHandle['value'] = $componentHandle;
    }

    /**
     * Unsets Component Handle.
     * The handle of the component. This references a component that you have created in your Product
     * setup
     */
    public function unsetComponentHandle(): void
    {
        $this->componentHandle = [];
    }

    /**
     * Returns Subscription Id.
     * The integer subscription ID for the allocation. This references a unique subscription in your Site
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * The integer subscription ID for the allocation. This references a unique subscription in your Site
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Quantity.
     * The allocated quantity set in to effect by the allocation. String for components supporting
     * fractional quantities
     *
     * @return int|string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The allocated quantity set in to effect by the allocation. String for components supporting
     * fractional quantities
     *
     * @maps quantity
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Previous Quantity.
     * The allocated quantity that was in effect before this allocation was created. String for components
     * supporting fractional quantities
     *
     * @return int|string|null
     */
    public function getPreviousQuantity()
    {
        return $this->previousQuantity;
    }

    /**
     * Sets Previous Quantity.
     * The allocated quantity that was in effect before this allocation was created. String for components
     * supporting fractional quantities
     *
     * @maps previous_quantity
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $previousQuantity
     */
    public function setPreviousQuantity($previousQuantity): void
    {
        $this->previousQuantity = $previousQuantity;
    }

    /**
     * Returns Memo.
     * The memo passed when the allocation was created
     */
    public function getMemo(): ?string
    {
        if (count($this->memo) == 0) {
            return null;
        }
        return $this->memo['value'];
    }

    /**
     * Sets Memo.
     * The memo passed when the allocation was created
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     * The memo passed when the allocation was created
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Returns Timestamp.
     * The time that the allocation was recorded, in format and UTC timezone, i.e. 2012-11-20T22:00:37Z
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     * The time that the allocation was recorded, in format and UTC timezone, i.e. 2012-11-20T22:00:37Z
     *
     * @maps timestamp
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTimestamp(?\DateTime $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Created At.
     * Timestamp indicating when this allocation was created
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Timestamp indicating when this allocation was created
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Proration Upgrade Scheme.
     * The scheme used if the proration was an upgrade. This is only present when the allocation was
     * created mid-period.
     */
    public function getProrationUpgradeScheme(): ?string
    {
        return $this->prorationUpgradeScheme;
    }

    /**
     * Sets Proration Upgrade Scheme.
     * The scheme used if the proration was an upgrade. This is only present when the allocation was
     * created mid-period.
     *
     * @maps proration_upgrade_scheme
     */
    public function setProrationUpgradeScheme(?string $prorationUpgradeScheme): void
    {
        $this->prorationUpgradeScheme = $prorationUpgradeScheme;
    }

    /**
     * Returns Proration Downgrade Scheme.
     * The scheme used if the proration was a downgrade. This is only present when the allocation was
     * created mid-period.
     */
    public function getProrationDowngradeScheme(): ?string
    {
        return $this->prorationDowngradeScheme;
    }

    /**
     * Sets Proration Downgrade Scheme.
     * The scheme used if the proration was a downgrade. This is only present when the allocation was
     * created mid-period.
     *
     * @maps proration_downgrade_scheme
     */
    public function setProrationDowngradeScheme(?string $prorationDowngradeScheme): void
    {
        $this->prorationDowngradeScheme = $prorationDowngradeScheme;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Price Point Name.
     */
    public function getPricePointName(): ?string
    {
        return $this->pricePointName;
    }

    /**
     * Sets Price Point Name.
     *
     * @maps price_point_name
     */
    public function setPricePointName(?string $pricePointName): void
    {
        $this->pricePointName = $pricePointName;
    }

    /**
     * Returns Price Point Handle.
     */
    public function getPricePointHandle(): ?string
    {
        return $this->pricePointHandle;
    }

    /**
     * Sets Price Point Handle.
     *
     * @maps price_point_handle
     */
    public function setPricePointHandle(?string $pricePointHandle): void
    {
        $this->pricePointHandle = $pricePointHandle;
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
     * Returns Previous Price Point Id.
     */
    public function getPreviousPricePointId(): ?int
    {
        return $this->previousPricePointId;
    }

    /**
     * Sets Previous Price Point Id.
     *
     * @maps previous_price_point_id
     */
    public function setPreviousPricePointId(?int $previousPricePointId): void
    {
        $this->previousPricePointId = $previousPricePointId;
    }

    /**
     * Returns Accrue Charge.
     * If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal
     * or if capture should be attempted immediately.
     */
    public function getAccrueCharge(): ?bool
    {
        return $this->accrueCharge;
    }

    /**
     * Sets Accrue Charge.
     * If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal
     * or if capture should be attempted immediately.
     *
     * @maps accrue_charge
     */
    public function setAccrueCharge(?bool $accrueCharge): void
    {
        $this->accrueCharge = $accrueCharge;
    }

    /**
     * Returns Initiate Dunning.
     * If true, if the immediate component payment fails, initiate dunning for the subscription.
     * Otherwise, leave the charges on the subscription to pay for at renewal.
     */
    public function getInitiateDunning(): ?bool
    {
        return $this->initiateDunning;
    }

    /**
     * Sets Initiate Dunning.
     * If true, if the immediate component payment fails, initiate dunning for the subscription.
     * Otherwise, leave the charges on the subscription to pay for at renewal.
     *
     * @maps initiate_dunning
     */
    public function setInitiateDunning(?bool $initiateDunning): void
    {
        $this->initiateDunning = $initiateDunning;
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
     * Returns Payment.
     */
    public function getPayment(): ?PaymentForAllocation
    {
        if (count($this->payment) == 0) {
            return null;
        }
        return $this->payment['value'];
    }

    /**
     * Sets Payment.
     *
     * @maps payment
     * @mapsBy anyOf(oneOf(PaymentForAllocation),null)
     */
    public function setPayment(?PaymentForAllocation $payment): void
    {
        $this->payment['value'] = $payment;
    }

    /**
     * Unsets Payment.
     */
    public function unsetPayment(): void
    {
        $this->payment = [];
    }

    /**
     * Returns Expires At.
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     *
     * @maps expires_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(?\DateTime $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Used Quantity.
     */
    public function getUsedQuantity(): ?int
    {
        return $this->usedQuantity;
    }

    /**
     * Sets Used Quantity.
     *
     * @maps used_quantity
     */
    public function setUsedQuantity(?int $usedQuantity): void
    {
        $this->usedQuantity = $usedQuantity;
    }

    /**
     * Returns Charge Id.
     */
    public function getChargeId(): ?int
    {
        return $this->chargeId;
    }

    /**
     * Sets Charge Id.
     *
     * @maps charge_id
     */
    public function setChargeId(?int $chargeId): void
    {
        $this->chargeId = $chargeId;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->allocationId)) {
            $json['allocation_id']              = $this->allocationId;
        }
        if (isset($this->componentId)) {
            $json['component_id']               = $this->componentId;
        }
        if (!empty($this->componentHandle)) {
            $json['component_handle']           = $this->componentHandle['value'];
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']            = $this->subscriptionId;
        }
        if (isset($this->quantity)) {
            $json['quantity']                   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->quantity,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->previousQuantity)) {
            $json['previous_quantity']          =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->previousQuantity,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (!empty($this->memo)) {
            $json['memo']                       = $this->memo['value'];
        }
        if (isset($this->timestamp)) {
            $json['timestamp']                  = DateTimeHelper::toRfc3339DateTime($this->timestamp);
        }
        if (isset($this->createdAt)) {
            $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->prorationUpgradeScheme)) {
            $json['proration_upgrade_scheme']   = $this->prorationUpgradeScheme;
        }
        if (isset($this->prorationDowngradeScheme)) {
            $json['proration_downgrade_scheme'] = $this->prorationDowngradeScheme;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']             = $this->pricePointId;
        }
        if (isset($this->pricePointName)) {
            $json['price_point_name']           = $this->pricePointName;
        }
        if (isset($this->pricePointHandle)) {
            $json['price_point_handle']         = $this->pricePointHandle;
        }
        if (isset($this->interval)) {
            $json['interval']                   = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']              = IntervalUnit::checkValue($this->intervalUnit);
        }
        if (isset($this->previousPricePointId)) {
            $json['previous_price_point_id']    = $this->previousPricePointId;
        }
        if (isset($this->accrueCharge)) {
            $json['accrue_charge']              = $this->accrueCharge;
        }
        if (isset($this->initiateDunning)) {
            $json['initiate_dunning']           = $this->initiateDunning;
        }
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']             = CreditType::checkValue($this->upgradeCharge['value']);
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit']           = CreditType::checkValue($this->downgradeCredit['value']);
        }
        if (!empty($this->payment)) {
            $json['payment']                    =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->payment['value'],
                    'anyOf(oneOf(PaymentForAllocation),null)'
                );
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']                 = DateTimeHelper::toRfc3339DateTime($this->expiresAt);
        }
        if (isset($this->usedQuantity)) {
            $json['used_quantity']              = $this->usedQuantity;
        }
        if (isset($this->chargeId)) {
            $json['charge_id']                  = $this->chargeId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
