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
     * Initializes a new created prepayment Builder object.
     */
    public static function init(): self
    {
        return new self(new CreatedPrepayment());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
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
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets starting balance in cents field.
     */
    public function startingBalanceInCents(?int $value): self
    {
        $this->instance->setStartingBalanceInCents($value);
        return $this;
    }

    /**
     * Sets ending balance in cents field.
     */
    public function endingBalanceInCents(?int $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
        return $this;
    }

    /**
     * Initializes a new created prepayment object.
     */
    public function build(): CreatedPrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
