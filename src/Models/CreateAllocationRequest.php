<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateAllocationRequest implements \JsonSerializable
{
    /**
     * @var CreateAllocation
     */
    private $allocation;

    /**
     * @param CreateAllocation $allocation
     */
    public function __construct(CreateAllocation $allocation)
    {
        $this->allocation = $allocation;
    }

    /**
     * Returns Allocation.
     */
    public function getAllocation(): CreateAllocation
    {
        return $this->allocation;
    }

    /**
     * Sets Allocation.
     *
     * @required
     * @maps allocation
     */
    public function setAllocation(CreateAllocation $allocation): void
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
        $json['allocation'] = $this->allocation;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
