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
     * @var string|null
     */
    private $pricePointHandle;

    /**
     * @var string|null
     */
    private $pricePointName;

    /**
     * @var array
     */
    private $componentHandle = [];

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
     *
     * @return int|string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
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
     *
     * @return int|string|null
     */
    public function getPreviousQuantity()
    {
        return $this->previousQuantity;
    }

    /**
     * Sets Previous Quantity.
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
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
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
     * Returns Component Handle.
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
     *
     * @maps component_handle
     */
    public function setComponentHandle(?string $componentHandle): void
    {
        $this->componentHandle['value'] = $componentHandle;
    }

    /**
     * Unsets Component Handle.
     */
    public function unsetComponentHandle(): void
    {
        $this->componentHandle = [];
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
        if (isset($this->interval)) {
            $json['interval']                   = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']              = IntervalUnit::checkValue($this->intervalUnit);
        }
        if (isset($this->previousPricePointId)) {
            $json['previous_price_point_id']    = $this->previousPricePointId;
        }
        if (isset($this->pricePointHandle)) {
            $json['price_point_handle']         = $this->pricePointHandle;
        }
        if (isset($this->pricePointName)) {
            $json['price_point_name']           = $this->pricePointName;
        }
        if (!empty($this->componentHandle)) {
            $json['component_handle']           = $this->componentHandle['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
