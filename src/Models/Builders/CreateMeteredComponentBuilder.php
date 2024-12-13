<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMeteredComponent;
use AdvancedBillingLib\Models\MeteredComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMeteredComponent
 *
 * @see CreateMeteredComponent
 */
class CreateMeteredComponentBuilder
{
    /**
     * @var CreateMeteredComponent
     */
    private $instance;

    private function __construct(CreateMeteredComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Metered Component Builder object.
     *
     * @param MeteredComponent $meteredComponent
     */
    public static function init(MeteredComponent $meteredComponent): self
    {
        return new self(new CreateMeteredComponent($meteredComponent));
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
     * Initializes a new Create Metered Component object.
     */
    public function build(): CreateMeteredComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
