<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\ComponentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentResponse
 *
 * @see ComponentResponse
 */
class ComponentResponseBuilder
{
    /**
     * @var ComponentResponse
     */
    private $instance;

    private function __construct(ComponentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Response Builder object.
     *
     * @param Component $component
     */
    public static function init(Component $component): self
    {
        return new self(new ComponentResponse($component));
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
     * Initializes a new Component Response object.
     */
    public function build(): ComponentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
