<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateEBBComponent;
use AdvancedBillingLib\Models\EBBComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateEBBComponent
 *
 * @see CreateEBBComponent
 */
class CreateEBBComponentBuilder
{
    /**
     * @var CreateEBBComponent
     */
    private $instance;

    private function __construct(CreateEBBComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create EBB Component Builder object.
     *
     * @param EBBComponent $eventBasedComponent
     */
    public static function init(EBBComponent $eventBasedComponent): self
    {
        return new self(new CreateEBBComponent($eventBasedComponent));
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
     * Initializes a new Create EBB Component object.
     */
    public function build(): CreateEBBComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
