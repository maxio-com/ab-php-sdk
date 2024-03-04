<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentAllocationErrorItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentAllocationErrorItem
 *
 * @see ComponentAllocationErrorItem
 */
class ComponentAllocationErrorItemBuilder
{
    /**
     * @var ComponentAllocationErrorItem
     */
    private $instance;

    private function __construct(ComponentAllocationErrorItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component allocation error item Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentAllocationErrorItem());
    }

    /**
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets on field.
     */
    public function on(?string $value): self
    {
        $this->instance->setOn($value);
        return $this;
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
     * Initializes a new component allocation error item object.
     */
    public function build(): ComponentAllocationErrorItem
    {
        return CoreHelper::clone($this->instance);
    }
}
