<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatedPrepayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatedPrepayment
 *
 * @see CreatedPrepayment
 */
class CreatedPrepaymentBuilder
{
    /**
     * @var CreatedPrepayment
     */
    private $instance;

    private function __construct(CreatedPrepayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Created Prepayment Builder object.
     */
    public static function init(): self
    {
        return new self(new CreatedPrepayment());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
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
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets starting balance in cents field.
     *
     * @param int|null $value
     */
    public function startingBalanceInCents(?int $value): self
    {
        $this->instance->setStartingBalanceInCents($value);
        return $this;
    }

    /**
     * Sets ending balance in cents field.
     *
     * @param int|null $value
     */
    public function endingBalanceInCents(?int $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
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
     * Initializes a new Created Prepayment object.
     */
    public function build(): CreatedPrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
