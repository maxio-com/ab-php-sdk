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
use AdvancedBillingLib\Models\MovementLineItem;
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
     * Initializes a new Movement Builder object.
     */
    public static function init(): self
    {
        return new self(new Movement());
    }

    /**
     * Sets timestamp field.
     *
     * @param \DateTime|null $value
     */
    public function timestamp(?\DateTime $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
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
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets category field.
     *
     * @param string|null $value
     */
    public function category(?string $value): self
    {
        $this->instance->setCategory($value);
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
     * Sets line items field.
     *
     * @param MovementLineItem[]|null $value
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets subscriber name field.
     *
     * @param string|null $value
     */
    public function subscriberName(?string $value): self
    {
        $this->instance->setSubscriberName($value);
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
     * Initializes a new Movement object.
     */
    public function build(): Movement
    {
        return CoreHelper::clone($this->instance);
    }
}
