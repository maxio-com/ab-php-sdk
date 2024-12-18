<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Breakouts;
use Core\Utils\CoreHelper;

/**
 * Builder for model Breakouts
 *
 * @see Breakouts
 */
class BreakoutsBuilder
{
    /**
     * @var Breakouts
     */
    private $instance;

    private function __construct(Breakouts $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Breakouts Builder object.
     */
    public static function init(): self
    {
        return new self(new Breakouts());
    }

    /**
     * Sets plan amount in cents field.
     *
     * @param int|null $value
     */
    public function planAmountInCents(?int $value): self
    {
        $this->instance->setPlanAmountInCents($value);
        return $this;
    }

    /**
     * Sets plan amount formatted field.
     *
     * @param string|null $value
     */
    public function planAmountFormatted(?string $value): self
    {
        $this->instance->setPlanAmountFormatted($value);
        return $this;
    }

    /**
     * Sets usage amount in cents field.
     *
     * @param int|null $value
     */
    public function usageAmountInCents(?int $value): self
    {
        $this->instance->setUsageAmountInCents($value);
        return $this;
    }

    /**
     * Sets usage amount formatted field.
     *
     * @param string|null $value
     */
    public function usageAmountFormatted(?string $value): self
    {
        $this->instance->setUsageAmountFormatted($value);
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
     * Initializes a new Breakouts object.
     */
    public function build(): Breakouts
    {
        return CoreHelper::clone($this->instance);
    }
}
