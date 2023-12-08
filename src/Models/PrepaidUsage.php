<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaidUsage implements \JsonSerializable
{
    /**
     * @var string
     */
    private $previousUnitBalance;

    /**
     * @var string
     */
    private $previousOverageUnitBalance;

    /**
     * @var int
     */
    private $newUnitBalance;

    /**
     * @var int
     */
    private $newOverageUnitBalance;

    /**
     * @var int
     */
    private $usageQuantity;

    /**
     * @var int
     */
    private $overageUsageQuantity;

    /**
     * @var int
     */
    private $componentId;

    /**
     * @var string
     */
    private $componentHandle;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var PrepaidUsageAllocationDetail[]
     */
    private $allocationDetails;

    /**
     * @param string $previousUnitBalance
     * @param string $previousOverageUnitBalance
     * @param int $newUnitBalance
     * @param int $newOverageUnitBalance
     * @param int $usageQuantity
     * @param int $overageUsageQuantity
     * @param int $componentId
     * @param string $componentHandle
     * @param string $memo
     * @param PrepaidUsageAllocationDetail[] $allocationDetails
     */
    public function __construct(
        string $previousUnitBalance,
        string $previousOverageUnitBalance,
        int $newUnitBalance,
        int $newOverageUnitBalance,
        int $usageQuantity,
        int $overageUsageQuantity,
        int $componentId,
        string $componentHandle,
        string $memo,
        array $allocationDetails
    ) {
        $this->previousUnitBalance = $previousUnitBalance;
        $this->previousOverageUnitBalance = $previousOverageUnitBalance;
        $this->newUnitBalance = $newUnitBalance;
        $this->newOverageUnitBalance = $newOverageUnitBalance;
        $this->usageQuantity = $usageQuantity;
        $this->overageUsageQuantity = $overageUsageQuantity;
        $this->componentId = $componentId;
        $this->componentHandle = $componentHandle;
        $this->memo = $memo;
        $this->allocationDetails = $allocationDetails;
    }

    /**
     * Returns Previous Unit Balance.
     */
    public function getPreviousUnitBalance(): string
    {
        return $this->previousUnitBalance;
    }

    /**
     * Sets Previous Unit Balance.
     *
     * @required
     * @maps previous_unit_balance
     */
    public function setPreviousUnitBalance(string $previousUnitBalance): void
    {
        $this->previousUnitBalance = $previousUnitBalance;
    }

    /**
     * Returns Previous Overage Unit Balance.
     */
    public function getPreviousOverageUnitBalance(): string
    {
        return $this->previousOverageUnitBalance;
    }

    /**
     * Sets Previous Overage Unit Balance.
     *
     * @required
     * @maps previous_overage_unit_balance
     */
    public function setPreviousOverageUnitBalance(string $previousOverageUnitBalance): void
    {
        $this->previousOverageUnitBalance = $previousOverageUnitBalance;
    }

    /**
     * Returns New Unit Balance.
     */
    public function getNewUnitBalance(): int
    {
        return $this->newUnitBalance;
    }

    /**
     * Sets New Unit Balance.
     *
     * @required
     * @maps new_unit_balance
     */
    public function setNewUnitBalance(int $newUnitBalance): void
    {
        $this->newUnitBalance = $newUnitBalance;
    }

    /**
     * Returns New Overage Unit Balance.
     */
    public function getNewOverageUnitBalance(): int
    {
        return $this->newOverageUnitBalance;
    }

    /**
     * Sets New Overage Unit Balance.
     *
     * @required
     * @maps new_overage_unit_balance
     */
    public function setNewOverageUnitBalance(int $newOverageUnitBalance): void
    {
        $this->newOverageUnitBalance = $newOverageUnitBalance;
    }

    /**
     * Returns Usage Quantity.
     */
    public function getUsageQuantity(): int
    {
        return $this->usageQuantity;
    }

    /**
     * Sets Usage Quantity.
     *
     * @required
     * @maps usage_quantity
     */
    public function setUsageQuantity(int $usageQuantity): void
    {
        $this->usageQuantity = $usageQuantity;
    }

    /**
     * Returns Overage Usage Quantity.
     */
    public function getOverageUsageQuantity(): int
    {
        return $this->overageUsageQuantity;
    }

    /**
     * Sets Overage Usage Quantity.
     *
     * @required
     * @maps overage_usage_quantity
     */
    public function setOverageUsageQuantity(int $overageUsageQuantity): void
    {
        $this->overageUsageQuantity = $overageUsageQuantity;
    }

    /**
     * Returns Component Id.
     */
    public function getComponentId(): int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @required
     * @maps component_id
     */
    public function setComponentId(int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Component Handle.
     */
    public function getComponentHandle(): string
    {
        return $this->componentHandle;
    }

    /**
     * Sets Component Handle.
     *
     * @required
     * @maps component_handle
     */
    public function setComponentHandle(string $componentHandle): void
    {
        $this->componentHandle = $componentHandle;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Allocation Details.
     *
     * @return PrepaidUsageAllocationDetail[]
     */
    public function getAllocationDetails(): array
    {
        return $this->allocationDetails;
    }

    /**
     * Sets Allocation Details.
     *
     * @required
     * @maps allocation_details
     *
     * @param PrepaidUsageAllocationDetail[] $allocationDetails
     */
    public function setAllocationDetails(array $allocationDetails): void
    {
        $this->allocationDetails = $allocationDetails;
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
        $json['previous_unit_balance']         = $this->previousUnitBalance;
        $json['previous_overage_unit_balance'] = $this->previousOverageUnitBalance;
        $json['new_unit_balance']              = $this->newUnitBalance;
        $json['new_overage_unit_balance']      = $this->newOverageUnitBalance;
        $json['usage_quantity']                = $this->usageQuantity;
        $json['overage_usage_quantity']        = $this->overageUsageQuantity;
        $json['component_id']                  = $this->componentId;
        $json['component_handle']              = $this->componentHandle;
        $json['memo']                          = $this->memo;
        $json['allocation_details']            = $this->allocationDetails;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
