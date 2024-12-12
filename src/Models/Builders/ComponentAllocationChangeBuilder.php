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
     * Initializes a new Component Allocation Change Builder object.
     *
     * @param int $previousAllocation
     * @param int $newAllocation
     * @param int $componentId
     * @param string $componentHandle
     * @param string $memo
     * @param int $allocationId
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
     *
     * @param int|string|null $value
     */
    public function allocatedQuantity($value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Component Allocation Change object.
     */
    public function build(): ComponentAllocationChange
    {
        return CoreHelper::clone($this->instance);
    }
}
