<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodCreditCardType;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodCreditCardType
 *
 * @see PaymentMethodCreditCardType
 */
class PaymentMethodCreditCardTypeBuilder
{
    /**
     * @var PaymentMethodCreditCardType
     */
    private $instance;

    private function __construct(PaymentMethodCreditCardType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method credit card type Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentMethodCreditCardType());
    }

    /**
     * Sets card brand field.
     */
    public function cardBrand(?string $value): self
    {
        $this->instance->setCardBrand($value);
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
     * Sets masked card number field.
     */
    public function maskedCardNumber(?string $value): self
    {
        $this->instance->setMaskedCardNumber($value);
        return $this;
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
     * Initializes a new payment method credit card type object.
     */
    public function build(): PaymentMethodCreditCardType
    {
        return CoreHelper::clone($this->instance);
    }
}
