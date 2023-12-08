<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Breakouts;
use AdvancedBillingLib\Models\Movement;
use Core\Utils\CoreHelper;

/**
 * Builder for model Movement
 *
 * @see Movement
 */
class MovementBuilder
{
    /**
     * @var Movement
     */
    private $instance;

    private function __construct(Movement $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new movement Builder object.
     */
    public static function init(): self
    {
        return new self(new Movement());
    }

    /**
     * Sets timestamp field.
     */
    public function timestamp(?string $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
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
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets category field.
     */
    public function category(?string $value): self
    {
        $this->instance->setCategory($value);
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
     * Sets line items field.
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets subscriber name field.
     */
    public function subscriberName(?string $value): self
    {
        $this->instance->setSubscriberName($value);
        return $this;
    }

    /**
     * Initializes a new movement object.
     */
    public function build(): Movement
    {
        return CoreHelper::clone($this->instance);
    }
}
