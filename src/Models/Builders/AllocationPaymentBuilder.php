<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationPayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationPayment
 *
 * @see AllocationPayment
 */
class AllocationPaymentBuilder
{
    /**
     * @var AllocationPayment
     */
    private $instance;

    private function __construct(AllocationPayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation payment Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationPayment());
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
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets success field.
     */
    public function success(?bool $value): self
    {
        $this->instance->setSuccess($value);
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
     * Initializes a new allocation payment object.
     */
    public function build(): AllocationPayment
    {
        return CoreHelper::clone($this->instance);
    }
}
