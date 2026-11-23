<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AggregatedEntitlement;
use AdvancedBillingLib\Models\AggregatedEntitlementPeriodicity;
use Core\Utils\CoreHelper;

/**
 * Builder for model AggregatedEntitlement
 *
 * @see AggregatedEntitlement
 */
class AggregatedEntitlementBuilder
{
    /**
     * @var AggregatedEntitlement
     */
    private $instance;

    private function __construct(AggregatedEntitlement $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Aggregated Entitlement Builder object.
     */
    public static function init(): self
    {
        return new self(new AggregatedEntitlement());
    }

    /**
     * Sets feature key field.
     *
     * @param string|null $value
     */
    public function featureKey(?string $value): self
    {
        $this->instance->setFeatureKey($value);
        return $this;
    }

    /**
     * Sets periodicity key field.
     *
     * @param string|null $value
     */
    public function periodicityKey(?string $value): self
    {
        $this->instance->setPeriodicityKey($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets value field.
     *
     * @param bool|float|string|null $value
     */
    public function value($value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets periodicity field.
     *
     * @param AggregatedEntitlementPeriodicity|null $value
     */
    public function periodicity(?AggregatedEntitlementPeriodicity $value): self
    {
        $this->instance->setPeriodicity($value);
        return $this;
    }

    /**
     * Unsets periodicity field.
     */
    public function unsetPeriodicity(): self
    {
        $this->instance->unsetPeriodicity();
        return $this;
    }

    /**
     * Sets source products field.
     *
     * @param string[]|null $value
     */
    public function sourceProducts(?array $value): self
    {
        $this->instance->setSourceProducts($value);
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
     * Initializes a new Aggregated Entitlement object.
     */
    public function build(): AggregatedEntitlement
    {
        return CoreHelper::clone($this->instance);
    }
}
