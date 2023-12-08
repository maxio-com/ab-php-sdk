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

class Allocation implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $previousQuantity;

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @var string|null
     */
    private $timestamp;

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
    private $previousPricePointId;

    /**
     * @var bool|null
     */
    private $accrueCharge;

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
     * The allocated quantity set in to effect by the allocation
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The allocated quantity set in to effect by the allocation
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Previous Quantity.
     * The allocated quantity that was in effect before this allocation was created
     */
    public function getPreviousQuantity(): ?int
    {
        return $this->previousQuantity;
    }

    /**
     * Sets Previous Quantity.
     * The allocated quantity that was in effect before this allocation was created
     *
     * @maps previous_quantity
     */
    public function setPreviousQuantity(?int $previousQuantity): void
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
     * The time that the allocation was recorded, in  format and UTC timezone, i.e. 2012-11-20T22:00:37Z
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     * The time that the allocation was recorded, in  format and UTC timezone, i.e. 2012-11-20T22:00:37Z
     *
     * @maps timestamp
     */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
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
    public function getPayment(): ?AllocationPayment
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
     * @mapsBy anyOf(oneOf(AllocationPayment),null)
     */
    public function setPayment(?AllocationPayment $payment): void
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
        if (isset($this->componentId)) {
            $json['component_id']               = $this->componentId;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']            = $this->subscriptionId;
        }
        if (isset($this->quantity)) {
            $json['quantity']                   = $this->quantity;
        }
        if (isset($this->previousQuantity)) {
            $json['previous_quantity']          = $this->previousQuantity;
        }
        if (!empty($this->memo)) {
            $json['memo']                       = $this->memo['value'];
        }
        if (isset($this->timestamp)) {
            $json['timestamp']                  = $this->timestamp;
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
        if (isset($this->previousPricePointId)) {
            $json['previous_price_point_id']    = $this->previousPricePointId;
        }
        if (isset($this->accrueCharge)) {
            $json['accrue_charge']              = $this->accrueCharge;
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
                    'anyOf(oneOf(AllocationPayment),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
