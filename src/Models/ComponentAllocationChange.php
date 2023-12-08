<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentAllocationChange implements \JsonSerializable
{
    /**
     * @var int
     */
    private $previousAllocation;

    /**
     * @var int
     */
    private $newAllocation;

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
     * @var int
     */
    private $allocationId;

    /**
     * @var int|null
     */
    private $allocatedQuantity;

    /**
     * @param int $previousAllocation
     * @param int $newAllocation
     * @param int $componentId
     * @param string $componentHandle
     * @param string $memo
     * @param int $allocationId
     */
    public function __construct(
        int $previousAllocation,
        int $newAllocation,
        int $componentId,
        string $componentHandle,
        string $memo,
        int $allocationId
    ) {
        $this->previousAllocation = $previousAllocation;
        $this->newAllocation = $newAllocation;
        $this->componentId = $componentId;
        $this->componentHandle = $componentHandle;
        $this->memo = $memo;
        $this->allocationId = $allocationId;
    }

    /**
     * Returns Previous Allocation.
     */
    public function getPreviousAllocation(): int
    {
        return $this->previousAllocation;
    }

    /**
     * Sets Previous Allocation.
     *
     * @required
     * @maps previous_allocation
     */
    public function setPreviousAllocation(int $previousAllocation): void
    {
        $this->previousAllocation = $previousAllocation;
    }

    /**
     * Returns New Allocation.
     */
    public function getNewAllocation(): int
    {
        return $this->newAllocation;
    }

    /**
     * Sets New Allocation.
     *
     * @required
     * @maps new_allocation
     */
    public function setNewAllocation(int $newAllocation): void
    {
        $this->newAllocation = $newAllocation;
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
     * Returns Allocation Id.
     */
    public function getAllocationId(): int
    {
        return $this->allocationId;
    }

    /**
     * Sets Allocation Id.
     *
     * @required
     * @maps allocation_id
     */
    public function setAllocationId(int $allocationId): void
    {
        $this->allocationId = $allocationId;
    }

    /**
     * Returns Allocated Quantity.
     */
    public function getAllocatedQuantity(): ?int
    {
        return $this->allocatedQuantity;
    }

    /**
     * Sets Allocated Quantity.
     *
     * @maps allocated_quantity
     */
    public function setAllocatedQuantity(?int $allocatedQuantity): void
    {
        $this->allocatedQuantity = $allocatedQuantity;
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
        $json['previous_allocation']    = $this->previousAllocation;
        $json['new_allocation']         = $this->newAllocation;
        $json['component_id']           = $this->componentId;
        $json['component_handle']       = $this->componentHandle;
        $json['memo']                   = $this->memo;
        $json['allocation_id']          = $this->allocationId;
        if (isset($this->allocatedQuantity)) {
            $json['allocated_quantity'] = $this->allocatedQuantity;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
