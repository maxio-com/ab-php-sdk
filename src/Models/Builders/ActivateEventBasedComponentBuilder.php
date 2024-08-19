<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ActivateEventBasedComponent;
use AdvancedBillingLib\Models\BillingSchedule;
use AdvancedBillingLib\Models\ComponentCustomPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ActivateEventBasedComponent
 *
 * @see ActivateEventBasedComponent
 */
class ActivateEventBasedComponentBuilder
{
    /**
     * @var ActivateEventBasedComponent
     */
    private $instance;

    private function __construct(ActivateEventBasedComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new activate event based component Builder object.
     */
    public static function init(): self
    {
        return new self(new ActivateEventBasedComponent());
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets billing schedule field.
     */
    public function billingSchedule(?BillingSchedule $value): self
    {
        $this->instance->setBillingSchedule($value);
        return $this;
    }

    /**
     * Sets custom price field.
     */
    public function customPrice(?ComponentCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
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
     * Initializes a new activate event based component object.
     */
    public function build(): ActivateEventBasedComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
