<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaidUsageAllocationDetail implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $allocationId;

    /**
     * @var int|null
     */
    private $chargeId;

    /**
     * @var int|null
     */
    private $usageQuantity;

    /**
     * Returns Allocation Id.
     */
    public function getAllocationId(): ?int
    {
        return $this->allocationId;
    }

    /**
     * Sets Allocation Id.
     *
     * @maps allocation_id
     */
    public function setAllocationId(?int $allocationId): void
    {
        $this->allocationId = $allocationId;
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

    /**
     * Returns Usage Quantity.
     */
    public function getUsageQuantity(): ?int
    {
        return $this->usageQuantity;
    }

    /**
     * Sets Usage Quantity.
     *
     * @maps usage_quantity
     */
    public function setUsageQuantity(?int $usageQuantity): void
    {
        $this->usageQuantity = $usageQuantity;
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
            $json['allocation_id']  = $this->allocationId;
        }
        if (isset($this->chargeId)) {
            $json['charge_id']      = $this->chargeId;
        }
        if (isset($this->usageQuantity)) {
            $json['usage_quantity'] = $this->usageQuantity;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
