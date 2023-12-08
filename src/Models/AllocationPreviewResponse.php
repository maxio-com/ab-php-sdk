<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AllocationPreviewResponse implements \JsonSerializable
{
    /**
     * @var AllocationPreview
     */
    private $allocationPreview;

    /**
     * @param AllocationPreview $allocationPreview
     */
    public function __construct(AllocationPreview $allocationPreview)
    {
        $this->allocationPreview = $allocationPreview;
    }

    /**
     * Returns Allocation Preview.
     */
    public function getAllocationPreview(): AllocationPreview
    {
        return $this->allocationPreview;
    }

    /**
     * Sets Allocation Preview.
     *
     * @required
     * @maps allocation_preview
     */
    public function setAllocationPreview(AllocationPreview $allocationPreview): void
    {
        $this->allocationPreview = $allocationPreview;
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
        $json['allocation_preview'] = $this->allocationPreview;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
