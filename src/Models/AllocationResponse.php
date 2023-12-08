<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AllocationResponse implements \JsonSerializable
{
    /**
     * @var Allocation|null
     */
    private $allocation;

    /**
     * Returns Allocation.
     */
    public function getAllocation(): ?Allocation
    {
        return $this->allocation;
    }

    /**
     * Sets Allocation.
     *
     * @maps allocation
     */
    public function setAllocation(?Allocation $allocation): void
    {
        $this->allocation = $allocation;
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
        if (isset($this->allocation)) {
            $json['allocation'] = $this->allocation;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
