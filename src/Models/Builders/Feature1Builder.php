<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Feature1;
use Core\Utils\CoreHelper;

/**
 * Builder for model Feature1
 *
 * @see Feature1
 */
class Feature1Builder
{
    /**
     * @var Feature1
     */
    private $instance;

    private function __construct(Feature1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new Feature1());
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
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
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
     * Unsets unit field.
     */
    public function unsetUnit(): self
    {
        $this->instance->unsetUnit();
        return $this;
    }

    /**
     * Sets value type field.
     *
     * @param string|null $value
     */
    public function valueType(?string $value): self
    {
        $this->instance->setValueType($value);
        return $this;
    }

    /**
     * Sets default value field.
     *
     * @param string|null $value
     */
    public function defaultValue(?string $value): self
    {
        $this->instance->setDefaultValue($value);
        return $this;
    }

    /**
     * Unsets default value field.
     */
    public function unsetDefaultValue(): self
    {
        $this->instance->unsetDefaultValue();
        return $this;
    }

    /**
     * Sets default periodicity interval field.
     *
     * @param int|null $value
     */
    public function defaultPeriodicityInterval(?int $value): self
    {
        $this->instance->setDefaultPeriodicityInterval($value);
        return $this;
    }

    /**
     * Unsets default periodicity interval field.
     */
    public function unsetDefaultPeriodicityInterval(): self
    {
        $this->instance->unsetDefaultPeriodicityInterval();
        return $this;
    }

    /**
     * Sets default periodicity unit field.
     *
     * @param string|null $value
     */
    public function defaultPeriodicityUnit(?string $value): self
    {
        $this->instance->setDefaultPeriodicityUnit($value);
        return $this;
    }

    /**
     * Unsets default periodicity unit field.
     */
    public function unsetDefaultPeriodicityUnit(): self
    {
        $this->instance->unsetDefaultPeriodicityUnit();
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
     * Initializes a new Feature 1 object.
     */
    public function build(): Feature1
    {
        return CoreHelper::clone($this->instance);
    }
}
