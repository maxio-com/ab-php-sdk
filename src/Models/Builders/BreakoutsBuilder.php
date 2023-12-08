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
     * Initializes a new breakouts Builder object.
     */
    public static function init(): self
    {
        return new self(new Breakouts());
    }

    /**
     * Sets plan amount in cents field.
     */
    public function planAmountInCents(?int $value): self
    {
        $this->instance->setPlanAmountInCents($value);
        return $this;
    }

    /**
     * Sets plan amount formatted field.
     */
    public function planAmountFormatted(?string $value): self
    {
        $this->instance->setPlanAmountFormatted($value);
        return $this;
    }

    /**
     * Sets usage amount in cents field.
     */
    public function usageAmountInCents(?int $value): self
    {
        $this->instance->setUsageAmountInCents($value);
        return $this;
    }

    /**
     * Sets usage amount formatted field.
     */
    public function usageAmountFormatted(?string $value): self
    {
        $this->instance->setUsageAmountFormatted($value);
        return $this;
    }

    /**
     * Initializes a new breakouts object.
     */
    public function build(): Breakouts
    {
        return CoreHelper::clone($this->instance);
    }
}
