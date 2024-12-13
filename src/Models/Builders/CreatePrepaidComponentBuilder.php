<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePrepaidComponent;
use AdvancedBillingLib\Models\PrepaidUsageComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepaidComponent
 *
 * @see CreatePrepaidComponent
 */
class CreatePrepaidComponentBuilder
{
    /**
     * @var CreatePrepaidComponent
     */
    private $instance;

    private function __construct(CreatePrepaidComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Prepaid Component Builder object.
     *
     * @param PrepaidUsageComponent $prepaidUsageComponent
     */
    public static function init(PrepaidUsageComponent $prepaidUsageComponent): self
    {
        return new self(new CreatePrepaidComponent($prepaidUsageComponent));
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
     * Initializes a new Create Prepaid Component object.
     */
    public function build(): CreatePrepaidComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
