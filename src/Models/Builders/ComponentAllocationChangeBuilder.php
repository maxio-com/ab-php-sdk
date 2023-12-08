<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentAllocationChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentAllocationChange
 *
 * @see ComponentAllocationChange
 */
class ComponentAllocationChangeBuilder
{
    /**
     * @var ComponentAllocationChange
     */
    private $instance;

    private function __construct(ComponentAllocationChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component allocation change Builder object.
     */
    public static function init(
        int $previousAllocation,
        int $newAllocation,
        int $componentId,
        string $componentHandle,
        string $memo,
        int $allocationId
    ): self {
        return new self(new ComponentAllocationChange(
            $previousAllocation,
            $newAllocation,
            $componentId,
            $componentHandle,
            $memo,
            $allocationId
        ));
    }

    /**
     * Sets allocated quantity field.
     */
    public function allocatedQuantity(?int $value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Initializes a new component allocation change object.
     */
    public function build(): ComponentAllocationChange
    {
        return CoreHelper::clone($this->instance);
    }
}
