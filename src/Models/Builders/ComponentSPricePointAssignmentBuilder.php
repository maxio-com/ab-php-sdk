<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentSPricePointAssignment;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentSPricePointAssignment
 *
 * @see ComponentSPricePointAssignment
 */
class ComponentSPricePointAssignmentBuilder
{
    /**
     * @var ComponentSPricePointAssignment
     */
    private $instance;

    private function __construct(ComponentSPricePointAssignment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component sprice point assignment Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentSPricePointAssignment());
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
     * Sets price point field.
     */
    public function pricePoint($value): self
    {
        $this->instance->setPricePoint($value);
        return $this;
    }

    /**
     * Initializes a new component sprice point assignment object.
     */
    public function build(): ComponentSPricePointAssignment
    {
        return CoreHelper::clone($this->instance);
    }
}
