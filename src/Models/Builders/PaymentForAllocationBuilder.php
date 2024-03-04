<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentForAllocation;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentForAllocation
 *
 * @see PaymentForAllocation
 */
class PaymentForAllocationBuilder
{
    /**
     * @var PaymentForAllocation
     */
    private $instance;

    private function __construct(PaymentForAllocation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment for allocation Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentForAllocation());
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
     * Initializes a new payment for allocation object.
     */
    public function build(): PaymentForAllocation
    {
        return CoreHelper::clone($this->instance);
    }
}
