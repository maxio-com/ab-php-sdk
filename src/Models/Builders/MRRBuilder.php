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
     * Initializes a new MRR Builder object.
     */
    public static function init(): self
    {
        return new self(new MRR());
    }

    /**
     * Sets amount in cents field.
     *
     * @param int|null $value
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets amount formatted field.
     *
     * @param string|null $value
     */
    public function amountFormatted(?string $value): self
    {
        $this->instance->setAmountFormatted($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets currency symbol field.
     *
     * @param string|null $value
     */
    public function currencySymbol(?string $value): self
    {
        $this->instance->setCurrencySymbol($value);
        return $this;
    }

    /**
     * Sets breakouts field.
     *
     * @param Breakouts|null $value
     */
    public function breakouts(?Breakouts $value): self
    {
        $this->instance->setBreakouts($value);
        return $this;
    }

    /**
     * Sets at time field.
     *
     * @param \DateTime|null $value
     */
    public function atTime(?\DateTime $value): self
    {
        $this->instance->setAtTime($value);
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
     * Initializes a new MRR object.
     */
    public function build(): MRR
    {
        return CoreHelper::clone($this->instance);
    }
}
