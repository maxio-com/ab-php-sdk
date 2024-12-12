<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaidUsageAllocationDetail;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidUsageAllocationDetail
 *
 * @see PrepaidUsageAllocationDetail
 */
class PrepaidUsageAllocationDetailBuilder
{
    /**
     * @var PrepaidUsageAllocationDetail
     */
    private $instance;

    private function __construct(PrepaidUsageAllocationDetail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Usage Allocation Detail Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidUsageAllocationDetail());
    }

    /**
     * Sets allocation id field.
     *
     * @param int|null $value
     */
    public function allocationId(?int $value): self
    {
        $this->instance->setAllocationId($value);
        return $this;
    }

    /**
     * Sets charge id field.
     *
     * @param int|null $value
     */
    public function chargeId(?int $value): self
    {
        $this->instance->setChargeId($value);
        return $this;
    }

    /**
     * Sets usage quantity field.
     *
     * @param int|null $value
     */
    public function usageQuantity(?int $value): self
    {
        $this->instance->setUsageQuantity($value);
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
     * Initializes a new Prepaid Usage Allocation Detail object.
     */
    public function build(): PrepaidUsageAllocationDetail
    {
        return CoreHelper::clone($this->instance);
    }
}
