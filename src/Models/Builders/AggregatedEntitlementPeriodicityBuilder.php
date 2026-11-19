<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AggregatedEntitlementPeriodicity;
use Core\Utils\CoreHelper;

/**
 * Builder for model AggregatedEntitlementPeriodicity
 *
 * @see AggregatedEntitlementPeriodicity
 */
class AggregatedEntitlementPeriodicityBuilder
{
    /**
     * @var AggregatedEntitlementPeriodicity
     */
    private $instance;

    private function __construct(AggregatedEntitlementPeriodicity $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Aggregated Entitlement Periodicity Builder object.
     */
    public static function init(): self
    {
        return new self(new AggregatedEntitlementPeriodicity());
    }

    /**
     * Sets interval field.
     *
     * @param int|null $value
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets unit field.
     *
     * @param string|null $value
     */
    public function unit(?string $value): self
    {
        $this->instance->setUnit($value);
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
     * Initializes a new Aggregated Entitlement Periodicity object.
     */
    public function build(): AggregatedEntitlementPeriodicity
    {
        return CoreHelper::clone($this->instance);
    }
}
