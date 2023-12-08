<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Breakouts;
use AdvancedBillingLib\Models\MRR;
use Core\Utils\CoreHelper;

/**
 * Builder for model MRR
 *
 * @see MRR
 */
class MRRBuilder
{
    /**
     * @var MRR
     */
    private $instance;

    private function __construct(MRR $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mrr Builder object.
     */
    public static function init(): self
    {
        return new self(new MRR());
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets amount formatted field.
     */
    public function amountFormatted(?string $value): self
    {
        $this->instance->setAmountFormatted($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets currency symbol field.
     */
    public function currencySymbol(?string $value): self
    {
        $this->instance->setCurrencySymbol($value);
        return $this;
    }

    /**
     * Sets breakouts field.
     */
    public function breakouts(?Breakouts $value): self
    {
        $this->instance->setBreakouts($value);
        return $this;
    }

    /**
     * Sets at time field.
     */
    public function atTime(?string $value): self
    {
        $this->instance->setAtTime($value);
        return $this;
    }

    /**
     * Initializes a new mrr object.
     */
    public function build(): MRR
    {
        return CoreHelper::clone($this->instance);
    }
}
