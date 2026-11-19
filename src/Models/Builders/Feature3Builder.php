<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Feature3;
use Core\Utils\CoreHelper;

/**
 * Builder for model Feature3
 *
 * @see Feature3
 */
class Feature3Builder
{
    /**
     * @var Feature3
     */
    private $instance;

    private function __construct(Feature3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new Feature3());
    }

    /**
     * Sets value field.
     *
     * @param string|null $value
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets periodicity interval field.
     *
     * @param int|null $value
     */
    public function periodicityInterval(?int $value): self
    {
        $this->instance->setPeriodicityInterval($value);
        return $this;
    }

    /**
     * Unsets periodicity interval field.
     */
    public function unsetPeriodicityInterval(): self
    {
        $this->instance->unsetPeriodicityInterval();
        return $this;
    }

    /**
     * Sets periodicity unit field.
     *
     * @param string|null $value
     */
    public function periodicityUnit(?string $value): self
    {
        $this->instance->setPeriodicityUnit($value);
        return $this;
    }

    /**
     * Unsets periodicity unit field.
     */
    public function unsetPeriodicityUnit(): self
    {
        $this->instance->unsetPeriodicityUnit();
        return $this;
    }

    /**
     * Sets propagate to subscriptions field.
     *
     * @param bool|null $value
     */
    public function propagateToSubscriptions(?bool $value): self
    {
        $this->instance->setPropagateToSubscriptions($value);
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
     * Initializes a new Feature 3 object.
     */
    public function build(): Feature3
    {
        return CoreHelper::clone($this->instance);
    }
}
