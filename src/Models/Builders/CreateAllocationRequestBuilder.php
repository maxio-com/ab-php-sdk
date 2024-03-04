<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateAllocation;
use AdvancedBillingLib\Models\CreateAllocationRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateAllocationRequest
 *
 * @see CreateAllocationRequest
 */
class CreateAllocationRequestBuilder
{
    /**
     * @var CreateAllocationRequest
     */
    private $instance;

    private function __construct(CreateAllocationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create allocation request Builder object.
     */
    public static function init(CreateAllocation $allocation): self
    {
        return new self(new CreateAllocationRequest($allocation));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new create allocation request object.
     */
    public function build(): CreateAllocationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
