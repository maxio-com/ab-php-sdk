<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationExpirationDate;
use AdvancedBillingLib\Models\UpdateAllocationExpirationDate;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateAllocationExpirationDate
 *
 * @see UpdateAllocationExpirationDate
 */
class UpdateAllocationExpirationDateBuilder
{
    /**
     * @var UpdateAllocationExpirationDate
     */
    private $instance;

    private function __construct(UpdateAllocationExpirationDate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update allocation expiration date Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateAllocationExpirationDate());
    }

    /**
     * Sets allocation field.
     */
    public function allocation(?AllocationExpirationDate $value): self
    {
        $this->instance->setAllocation($value);
        return $this;
    }

    /**
     * Initializes a new update allocation expiration date object.
     */
    public function build(): UpdateAllocationExpirationDate
    {
        return CoreHelper::clone($this->instance);
    }
}
