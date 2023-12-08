<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AllocationPreviewItem implements \JsonSerializable
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
     * @var float|null
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $previousQuantity;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var array
     */
    private $timestamp = [];

    /**
     * @var string|null
     */
    private $prorationUpgradeScheme;

    /**
     * @var string|null
     */
    private $prorationDowngradeScheme;

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
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var int|null
     */
    private $previousPricePointId;

    /**
     * @var string|null
     */
    private $componentHandle;

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
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Previous Quantity.
     */
    public function getPreviousQuantity(): ?int
    {
        return $this->previousQuantity;
    }

    /**
     * Sets Previous Quantity.
     *
     * @maps previous_quantity
     */
    public function setPreviousQuantity(?int $previousQuantity): void
    {
        $this->previousQuantity = $previousQuantity;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Timestamp.
     */
    public function getTimestamp(): ?string
    {
        if (count($this->timestamp) == 0) {
            return null;
        }
        return $this->timestamp['value'];
    }

    /**
     * Sets Timestamp.
     *
     * @maps timestamp
     */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp['value'] = $timestamp;
    }

    /**
     * Unsets Timestamp.
     */
    public function unsetTimestamp(): void
    {
        $this->timestamp = [];
    }

    /**
     * Returns Proration Upgrade Scheme.
     */
    public function getProrationUpgradeScheme(): ?string
    {
        return $this->prorationUpgradeScheme;
    }

    /**
     * Sets Proration Upgrade Scheme.
     *
     * @maps proration_upgrade_scheme
     */
    public function setProrationUpgradeScheme(?string $prorationUpgradeScheme): void
    {
        $this->prorationUpgradeScheme = $prorationUpgradeScheme;
    }

    /**
     * Returns Proration Downgrade Scheme.
     */
    public function getProrationDowngradeScheme(): ?string
    {
        return $this->prorationDowngradeScheme;
    }

    /**
     * Sets Proration Downgrade Scheme.
     *
     * @maps proration_downgrade_scheme
     */
    public function setProrationDowngradeScheme(?string $prorationDowngradeScheme): void
    {
        $this->prorationDowngradeScheme = $prorationDowngradeScheme;
    }

    /**
     * Returns Accrue Charge.
     */
    public function getAccrueCharge(): ?bool
    {
        return $this->accrueCharge;
    }

    /**
     * Sets Accrue Charge.
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
     * Returns Component Handle.
     */
    public function getComponentHandle(): ?string
    {
        return $this->componentHandle;
    }

    /**
     * Sets Component Handle.
     *
     * @maps component_handle
     */
    public function setComponentHandle(?string $componentHandle): void
    {
        $this->componentHandle = $componentHandle;
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
        if (isset($this->memo)) {
            $json['memo']                       = $this->memo;
        }
        if (!empty($this->timestamp)) {
            $json['timestamp']                  = $this->timestamp['value'];
        }
        if (isset($this->prorationUpgradeScheme)) {
            $json['proration_upgrade_scheme']   = $this->prorationUpgradeScheme;
        }
        if (isset($this->prorationDowngradeScheme)) {
            $json['proration_downgrade_scheme'] = $this->prorationDowngradeScheme;
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
        if (isset($this->pricePointId)) {
            $json['price_point_id']             = $this->pricePointId;
        }
        if (isset($this->previousPricePointId)) {
            $json['previous_price_point_id']    = $this->previousPricePointId;
        }
        if (isset($this->componentHandle)) {
            $json['component_handle']           = $this->componentHandle;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
