<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Allocation;
use AdvancedBillingLib\Models\AllocationResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationResponse
 *
 * @see AllocationResponse
 */
class AllocationResponseBuilder
{
    /**
     * @var AllocationResponse
     */
    private $instance;

    private function __construct(AllocationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation response Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationResponse());
    }

    /**
     * Sets allocation field.
     */
    public function allocation(?Allocation $value): self
    {
        $this->instance->setAllocation($value);
        return $this;
    }

    /**
     * Initializes a new allocation response object.
     */
    public function build(): AllocationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
