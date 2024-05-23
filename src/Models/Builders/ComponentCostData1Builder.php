<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCostData1;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentCostData1
 *
 * @see ComponentCostData1
 */
class ComponentCostData1Builder
{
    /**
     * @var ComponentCostData1
     */
    private $instance;

    private function __construct(ComponentCostData1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component cost data 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentCostData1());
    }

    /**
     * Sets rates field.
     */
    public function rates(?array $value): self
    {
        $this->instance->setRates($value);
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
     * Initializes a new component cost data 1 object.
     */
    public function build(): ComponentCostData1
    {
        return CoreHelper::clone($this->instance);
    }
}
