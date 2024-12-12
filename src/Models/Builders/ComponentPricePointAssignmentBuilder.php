<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePointAssignment;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointAssignment
 *
 * @see ComponentPricePointAssignment
 */
class ComponentPricePointAssignmentBuilder
{
    /**
     * @var ComponentPricePointAssignment
     */
    private $instance;

    private function __construct(ComponentPricePointAssignment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Price Point Assignment Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentPricePointAssignment());
    }

    /**
     * Sets component id field.
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets price point field.
     *
     * @param string|int|null $value
     */
    public function pricePoint($value): self
    {
        $this->instance->setPricePoint($value);
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
     * Initializes a new Component Price Point Assignment object.
     */
    public function build(): ComponentPricePointAssignment
    {
        return CoreHelper::clone($this->instance);
    }
}
