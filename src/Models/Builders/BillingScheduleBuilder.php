<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BillingSchedule;
use Core\Utils\CoreHelper;

/**
 * Builder for model BillingSchedule
 *
 * @see BillingSchedule
 */
class BillingScheduleBuilder
{
    /**
     * @var BillingSchedule
     */
    private $instance;

    private function __construct(BillingSchedule $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new billing schedule Builder object.
     */
    public static function init(): self
    {
        return new self(new BillingSchedule());
    }

    /**
     * Sets initial billing at field.
     */
    public function initialBillingAt(?\DateTime $value): self
    {
        $this->instance->setInitialBillingAt($value);
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
     * Initializes a new billing schedule object.
     */
    public function build(): BillingSchedule
    {
        return CoreHelper::clone($this->instance);
    }
}
