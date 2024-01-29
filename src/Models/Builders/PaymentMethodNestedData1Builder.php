<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodNestedData1;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodNestedData1
 *
 * @see PaymentMethodNestedData1
 */
class PaymentMethodNestedData1Builder
{
    /**
     * @var PaymentMethodNestedData1
     */
    private $instance;

    private function __construct(PaymentMethodNestedData1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method nested data 1 Builder object.
     */
    public static function init(
        string $maskedAccountNumber,
        string $maskedRoutingNumber,
        string $cardBrand,
        string $maskedCardNumber,
        string $details,
        string $kind,
        string $memo,
        string $email
    ): self {
        return new self(new PaymentMethodNestedData1(
            $maskedAccountNumber,
            $maskedRoutingNumber,
            $cardBrand,
            $maskedCardNumber,
            $details,
            $kind,
            $memo,
            $email
        ));
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets card expiration field.
     */
    public function cardExpiration(?string $value): self
    {
        $this->instance->setCardExpiration($value);
        return $this;
    }

    /**
     * Sets last four field.
     */
    public function lastFour(?string $value): self
    {
        $this->instance->setLastFour($value);
        return $this;
    }

    /**
     * Unsets last four field.
     */
    public function unsetLastFour(): self
    {
        $this->instance->unsetLastFour();
        return $this;
    }

    /**
     * Initializes a new payment method nested data 1 object.
     */
    public function build(): PaymentMethodNestedData1
    {
        return CoreHelper::clone($this->instance);
    }
}
