<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PreviewAllocationsRequest implements \JsonSerializable
{
    /**
     * @var CreateAllocation[]
     */
    private $allocations;

    /**
     * @var string|null
     */
    private $effectiveProrationDate;

    /**
     * @param CreateAllocation[] $allocations
     */
    public function __construct(array $allocations)
    {
        $this->allocations = $allocations;
    }

    /**
     * Returns Allocations.
     *
     * @return CreateAllocation[]
     */
    public function getAllocations(): array
    {
        return $this->allocations;
    }

    /**
     * Sets Allocations.
     *
     * @required
     * @maps allocations
     *
     * @param CreateAllocation[] $allocations
     */
    public function setAllocations(array $allocations): void
    {
        $this->allocations = $allocations;
    }

    /**
     * Returns Effective Proration Date.
     * To calculate proration amounts for a future time. Only within a current subscription period. Only
     * ISO8601 format is supported.
     */
    public function getEffectiveProrationDate(): ?string
    {
        return $this->effectiveProrationDate;
    }

    /**
     * Sets Effective Proration Date.
     * To calculate proration amounts for a future time. Only within a current subscription period. Only
     * ISO8601 format is supported.
     *
     * @maps effective_proration_date
     */
    public function setEffectiveProrationDate(?string $effectiveProrationDate): void
    {
        $this->effectiveProrationDate = $effectiveProrationDate;
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
        $json['allocations']                  = $this->allocations;
        if (isset($this->effectiveProrationDate)) {
            $json['effective_proration_date'] = $this->effectiveProrationDate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
