<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class MeteredUsage implements \JsonSerializable
{
    /**
     * @var string
     */
    private $previousUnitBalance;

    /**
     * @var int
     */
    private $newUnitBalance;

    /**
     * @var int
     */
    private $usageQuantity;

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
     * @param string $previousUnitBalance
     * @param int $newUnitBalance
     * @param int $usageQuantity
     * @param int $componentId
     * @param string $componentHandle
     * @param string $memo
     */
    public function __construct(
        string $previousUnitBalance,
        int $newUnitBalance,
        int $usageQuantity,
        int $componentId,
        string $componentHandle,
        string $memo
    ) {
        $this->previousUnitBalance = $previousUnitBalance;
        $this->newUnitBalance = $newUnitBalance;
        $this->usageQuantity = $usageQuantity;
        $this->componentId = $componentId;
        $this->componentHandle = $componentHandle;
        $this->memo = $memo;
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
        $json['previous_unit_balance'] = $this->previousUnitBalance;
        $json['new_unit_balance']      = $this->newUnitBalance;
        $json['usage_quantity']        = $this->usageQuantity;
        $json['component_id']          = $this->componentId;
        $json['component_handle']      = $this->componentHandle;
        $json['memo']                  = $this->memo;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
